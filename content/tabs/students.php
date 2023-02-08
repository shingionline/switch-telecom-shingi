<p>I would recreate the <b>students</b> table as follows:</p>
<pre><code>
CREATE TABLE `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `age` int(11) NOT NULL,
  `grade` int(11) NOT NULL,
  PRIMARY KEY (`id`)
);
</code></pre>

<h4 class="mt-4">Explanation</h4>

<p>
<ul>
  <li>Added a new column id and made it the primary key so every student has a unique id. This will make it possible to set the student id as a foreign key in other related tables.</li>
<li>Removed the subjects column. Will create a separate table for subjects to be shared by both students and teachers.</li>
<li>Removed the teachers column. Will link teachers and students in a separate table.</li>
</ul>
</p>