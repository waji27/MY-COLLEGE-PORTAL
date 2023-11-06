<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Attendence Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            font: 14px sans-serif;
        }
    </style>
</head>

<body>

    <?php require "../components/nav.php" ?>

    <div class="container d-flex flex-column align-items-center justify-content-evenly">
        <form action="attendence.php" method="POST" class="d-flex align-items-center justify-content-evenly p-3 gap-3" >
            <select name="subject" id="subject">
                <option selected disabled>Choose Subject...</option>
                <option value="BS Computer Science">BS Computer Science</option>
                <option value="BS Mathematics">BS Mathematics</option>
                <option value="BS Chemistry">BS Chemistry</option>
                <option value="BS Physics">BS Physics</option>
                <option value="BS Botany">BS Botany</option>
            </select>
            <select name="semester" id="semester">
                <option value="1st Semester">1st Semester</option>
                <option value="2nd Semester">2nd Semester</option>
                <option value="3rd Semester">3rd Semester</option>
                <option value="4th Semester">4th Semester</option>
                <option value="5th Semester">5th Semester</option>
                <option value="6th Semester">6th Semester</option>
                <option value="7th Semester">7th Semester</option>
                <option value="8th Semester">8th Semester</option>
            </select>
            <button class="btn btn-primary">Get Students</button>
        </form>
        <h2>Class : BS Computer Science</h2>
        <h2>Semester : 6</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ROll No</th>
                    <th>Full Name </th>
                    <th>Present</th>
                    <th>Absent</th>
                    <th>Leave</th>
                    <th class="" disabled">Other</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>231233</td>
                    <td>Wajdan </td>
                    <td><input type="radio" name="Wajdan_attendence"></td>
                    <td><input type="radio" name="Wajdan_attendence"></td>
                    <td><input type="radio" name="Wajdan_attendence"></td>
                    <td><input type="radio" name="Wajdan_attendence"></td>
                </tr>
                <tr>
                    <td>213333</td>
                    <td>Ali </td>
                    <td><input type="radio" name="ali_attendence"></td>
                    <td><input type="radio" name="ali_attendence"></td>
                    <td><input type="radio" name="ali_attendence"></td>
                    <td><input type="radio" name="ali_attendence"></td>
                </tr>
            </tbody>
        </table>
        <button class="btn btn-primary">Download</button>
    </div>

    <?php require "../components/footer.php" ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

</body>

</html>