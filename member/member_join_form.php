<!doctype html>
<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <form action="member_join.php" method="post">
        <table>
            <tr>
                <td>아이디</td>
                <td><input type="text" name="id"></td>
                <td><input type='button' value="아이디 중복 확인"
                    onclick="window.open('id_check.php', '', 'width=300, height')"
                ></td>
            </tr>
            <tr>
                <td>비밀번호</td>
                <td><input type="password" name="pw"></td>
            </tr>
            <tr>
                <td>성명</td>
                <td><input type="text" name="name"></td>
            </tr>
        </table>
        <input type="submit" value="확인">
    </form>
</body>

</html>