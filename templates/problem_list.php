<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>題目</title>
    <?php include("_site_header.php"); ?>
</head>

<body>
    <?php include("_site_navbar.php") ?>
    <div class="search_bar">
        <div class="search_input">
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z">
                </path>
            </svg>
            <input class="search_input" type="text">
        </div>
        <select class="serach_select">
            <option>Difficulty</option>
            <option>EASY</optioin>
            <option>Medium</optioin>
            <option>HARD</optioin>
        </select>
    </div>
    <div style="padding :0 15vw;">
        <table class="problem_list">
            <thead>
                <td>通過</td>
                <td>OJ</td>
                <td>編號</td>
                <td>名稱</td>
                <td>難度</td>
                <td>標籤</td>
                <td>解題人數</td>
                <td>通過率</td>
                <td>上傳日期</td>
            </thead>
            <tbody>
                <tr onclick="window.location='./problem.php'">
                    <td></td>
                    <td>ZJ</td>
                    <td>15</td>
                    <td>ZJ</td>
                    <td>HARD</td>
                    <td>數學</td>
                    <td>80</td>
                    <td>80/100</td>
                    <td>2024-02-30</td>
                </tr>
                <tr>
                    <td></td>
                    <td>ZJ</td>
                    <td>15</td>
                    <td>ZJ</td>
                    <td>HARD</td>
                    <td>數學</td>
                    <td>80</td>
                    <td>80/100</td>
                    <td>2024-02-30</td>
                </tr>
            </tbody>
        </table>
        <div>
</body>

</html>