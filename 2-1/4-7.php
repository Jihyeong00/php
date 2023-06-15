<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    </style>
</head>

<body>
    <form method="get" action="4-8.php">
        <table>
            <tr>
                <td>아이디</td>
                <td><input type="text" name="id"></td>
            </tr>
            <tr>
                <td>비밀번호</td>
                <td><input type="password" name="pw"></td>
            </tr>
            <tr>
                <td>전화번호</td>
                <td id="phone">
                    <input type="phone1" name="pn1">-
                    <input type="phone1" name="pn2">-
                    <input type="phone1" name="pn3">
                </td>
            </tr>
            <tr>
                <td>성별</td>
                <td>
                    <input type="radio" name="gender" value="M" checked>남성
                    <input type="radio" name="gender" value="F">여성
                </td>
            </tr>
            <tr>
                <td>가입경로</td>
                <td>
                    <select name="subs" id="">
                        <option value="인" selected>인터넷 검색</option>
                        <option value="친">친지</option>
                        <option value="기">기타</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>주소지</td>
                <td>
                    <select name="addr" id="">
                        <option value="서울" select>서울</option>
                        <option value="경기">경기</option>
                        <option value="인천">인천</option>
                        <option value="기타">기타</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>메모</td>
                <td><textarea name="memo" id="" rows="4"></textarea></td>
            </tr>
        </table>
        <input type="submit" name="" id="" value="전송">
    </form>
</body>

</html>