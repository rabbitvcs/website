import feedparser
from datetime import datetime

class Template:
    def __init__(self, source, replacements=None):
        self.source = source
        self.replacements = replacements

    def get_key_str(self, key):
        return "%{" + key + "}%"

    def set_replacements(self, replacements):
        self.replacements = replacements

    def get(self):
        output = self.source
        for key,val in self.replacements.items():
            output = output.replace(self.get_key_str(key), val)
        
        return output

class Entry:
    def __init__(self, entry, template=None):
        self.entry = entry
        self.template = template

    def set_template(self, template):
        self.template = template
    
    def get(self):
        replacements = {
            "title":    self.entry.title_detail.value,
            "updated":  datetime(*self.entry.updated_parsed[0:7]).strftime("%Y-%m-%d %I:%M %p"),
            "author":   self.entry.author,
            "link":     self.entry.link
        }
        
        if "summary" in self.entry:
            replacements["summary"] = self.entry.summary
        elif "content" in self.entry:
            replacements["summary"] = self.entry.content[0].value
        
        template.set_replacements(replacements)
        return template.get()

def write_to_file(path, content):
    f = open(path, "w")
    f.write(content.encode("UTF-8"))

def date_compare(e1, e2):
    date1 = 0
    if hasattr(e1.entry, "updated_parsed"):
        date1 = e1.entry.updated_parsed[0:5]
    elif hasattr(e1.entry, "published_parsed"):
        date1 = e1.entry.published_parsed[0:5]
    elif hasattr(e1.entry, "created_parsed"):
        date1 = e1.entry.created_parsed[0:5]

    date2 = 0
    if hasattr(e2.entry, "updated_parsed"):
        date2 = e2.entry.updated_parsed[0:5]
    elif hasattr(e2.entry, "published_parsed"):
        date2 = e2.entry.published_parsed[0:5]
    elif hasattr(e2.entry, "created_parsed"):
        date2 = e2.entry.created_parsed[0:5]

    if date1 == date2:
        return 0
    if date1 == 0:
        return -1
    if date2 == 0:
        return 1
        
    return cmp(datetime(*date2), datetime(*date1))

if __name__ == "__main__":
    import sys
    from optparse import OptionParser

    usage = "usage: %prog -o outfile [-t file.tpl] url1 url2"
    parser = OptionParser(usage=usage)
    parser.add_option("-o", "--output", help="output file", dest="output")
    parser.add_option("-t", "--template", help="use template file", dest="template")
    parser.add_option("-l", "--limit", help="limit number of entries to output", dest="limit")
    (options, args) = parser.parse_args(sys.argv)
    
    limit = 0
    if options.limit is not None:
        limit = int(options.limit)
    
    if options.output is None:
        print usage
        sys.exit()

    template_file = "entry.tpl"
    if options.template is not None:
        template_file = options.template

    template = Template(open(template_file, "r").read())

    entries = []
    for url in args[1:]:
        f = feedparser.parse(url)
        for entry in f.entries:
            entries.append(Entry(entry, template))

    entries.sort(date_compare)

    if limit == 0:
        limit = len(entries) - 1

    content = ""
    for entry in entries[0:limit]:
        content += entry.get()
            
    write_to_file(options.output, content)
