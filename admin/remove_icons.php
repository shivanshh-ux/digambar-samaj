<?php
$file_path = "includes/sidebar.php";
$content = file_get_contents($file_path);

// Remove the FontAwesome <i> tags and potential newlines before them
$content = preg_replace('/^\s*<i class="fas fa-[^"]*"[^>]*><\/i>\r?\n?/m', '', $content);

// Remove ml-3 from spans
$content = preg_replace('/class="ml-3\s*/', 'class="', $content);
$content = preg_replace('/\s*class=""/', '', $content);

file_put_contents($file_path, $content);
echo "Icons removed successfully.";
?>
