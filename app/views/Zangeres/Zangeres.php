<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>
        <?= $data['title']; ?> 

        <table border="1">
            <thead>
                <th>Naam</th>
                <th>NettoWaarde</th>
                <th>Land</th>
                <th>Mobiel</th>
                <th>Leeftijd</th>
            </thead>
            <tbody>
                <?= $data['rows']; ?>
            </tbody>
        </table>
    </h3>
</body>
</html>


