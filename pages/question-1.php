<h3>Question 1</h3>
<p><i>Use HTML and JavaScript to create a webpage that prints the numbers from 1 to 100</i></p>
<hr size="1" />
<br>

<div id="app"></div>

<script>

    let output = [];

    for (let i = 1; i <= 100; i++) {

        if (i % 3 === 0 && i % 5 === 0) {

            output.push("Switch Telecom");

        } else if (i % 3 === 0) {

            output.push("Switch");

        } else if (i % 5 === 0) {

            output.push("Telecom");

        } else {

            output.push(i);

        }
    }


    $("#app").html(output.join(", "));

</script>