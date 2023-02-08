<p>I would create a new <b>teacher_subjects</b> table as follows:</p>
<pre><code>
CREATE TABLE IF NOT EXISTS `teacher_subjects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `teacher_id` (`teacher_id`),
  KEY `teacher_subjects_ibfk_1` (`subject_id`),
  CONSTRAINT `teacher_subjects_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`),
  CONSTRAINT `teacher_subjects_ibfk_2` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
</code></pre>

<h4 class="mt-4">Explanation</h4>

<p>
<ul>
<li>This table stores the subjects which each teacher teaches.</li>
<li>I've set the teacher id and subject id as foreign keys to make the tables related.</li>
</ul>
</p>