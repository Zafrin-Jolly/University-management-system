<html>
    <head>
        <title>Form Validations</title>
        <script type="text/javascript">
        /**/
        function validate()
        {
            var student_ID = document.getElementById("sid");
            var course_ID = document.getElementById("cid");

            if (student_ID.value =="" ||course_ID.value=="")
            {
                alert("No blank values allowed");
                return false;
            }
            else
            {
                true;

            }
        }
        
        
        </script>
    </head>
    <body>
        <form onsubmit="return validate()"action="massage.php">
            <input id="sid" placeholder="student_ID"
            type="text"/><br><br>
            <input id="cid" placeholder="courset_ID"
            type="text"/>

            <br><br>
            <button type="submit">Submit</button>
        </form>

    </body>


</html>