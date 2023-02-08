<p>I would recreate the <b>teachers</b> table as follows:</p>
<pre><code>
CREATE TABLE IF NOT EXISTS `teachers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `headOfGrade` enum('No','Yes') NOT NULL DEFAULT 'No',
  `salary` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
</code></pre>

<h4 class="mt-4">Explanation</h4>

<p>
<ul>
  <li>Added a new column id and made it the primary key so every teacher has a unique id. This will make it possible to set the teacher id as a foreign key in other related tables.</li>
<li>Made the headOfGrade column an enum to since there are only 2 possible value - Yes and No.</li>
<li>Changed the salary column to float since it can have decimal values.</li>
<li>Removed the subjects column. Will create a separate table for subjects to be shared by both students and teachers.</li></ul>
</p>