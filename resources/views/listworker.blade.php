<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listworker | sarmoc</title>
</head>
<body>
    <h3>List of registeded</h3>

    @foreach ($users as $user)
        <ul>
            <li>
                {{$user->id}} |
                {{$user->fullname}} |
                {{$user->gender}} |
                {{$user->nuit}} |
                {{$user->numberofdocument}} |
                {{$user->provinceofbirth}} |
                {{$user->districofbirth}} |
                {{$user->fullfathername}} |
                {{$user->fullmothername}} |
                {{$user->birthday}} |
                {{$user->admissiondate}} |
                {{$user->academiclevel}} |
                {{$user->trainingarea}} |
                {{$user->phone1}} | 
                {{$user->phone2}} |
                <p>========================================================================================</p>
              
            </li>
        </ul>

    @endforeach
    
</body>
</html>
