<?php
use PhlyBlog\EntryEntity;

$entry  = new EntryEntity();

$entry->setId('4f8706cf61740-post-name');
$entry->setTitle('4f8706cf61740 Post');
$entry->setAuthor('custer');
$entry->setDraft(true);
$entry->setPublic(false);
$entry->setCreated(new DateTime('2007:12:18 19:27:27'));
$entry->setUpdated(new DateTime('2007:12:19 19:27:27'));
$entry->setTimezone('America/Chicago');
$entry->setTags(array (
  0 => 'holiday',
  1 => 'personal',
  2 => 'programming',
  3 => 'thoughts',
  4 => 'war',
  5 => 'literature',
  6 => 'children',
  7 => 'draft',
  8 => 'conferences',
  9 => 'php',
));

$body =<<<'EOT'
This is it!
EOT;
$entry->setBody($body);

$extended =<<<'EOT'
This is the extended portion of the entry.
EOT;
$entry->setExtended($extended);

return $entry;

