import re

file_path = r"c:\xampp\htdocs\jain-digambar-matrimony\admin\includes\sidebar.php"

with open(file_path, 'r', encoding='utf-8') as f:
    content = f.read()

# Remove the FontAwesome <i> tags
content = re.sub(r'^\s*<i class="fas fa-[^"]*"[^>]*></i>\n?', '', content, flags=re.MULTILINE)

# Remove ml-3 from spans
content = re.sub(r'class="ml-3\s*', 'class="', content)
content = re.sub(r'\s*class=""', '', content)

with open(file_path, 'w', encoding='utf-8') as f:
    f.write(content)
