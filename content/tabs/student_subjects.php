<p>I would create a new <b>student_subjects</b> table as follows:</p>
<pre><code>
CREATE TABLE `student_subjects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `student_id` (`student_id`),
  KEY `subject_id` (`subject_id`),
  CONSTRAINT `student_subjects_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`),
  CONSTRAINT `student_subjects_ibfk_2` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`)
);
</code></pre>

<h4 class="mt-4">Explanation</h4>

<p>
<ul>
<li>This table stores the subjects which each student is taking.</li>
<li>I've set the student_id and subject_id as foreign keys to make the tables related.</li>
</ul>
</p>