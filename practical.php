<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<select onchange="getval(this);">
        <option  selected disabled>Please Choose:</option>
        <option value="term1">term1</option>
        <option value="term2">term2</option>
        <option value="term3">term3</option>
    </select>
</body>
</html>
<script>
  function getval(sel)
    {
        var res = sel.value;
        document.write(res);
        //alert(sel.value);
    }
    </script>