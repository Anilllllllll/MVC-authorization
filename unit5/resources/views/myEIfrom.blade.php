<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>

    <form method="POST" action="/submit">
        @csrf
        
        <!-- Name -->
        <input type="text" name="name" value="{{ old('name') }}" placeholder="Enter the name">
        
        <br><br>

        @error('name')
            <p style="color:red">{{ $message }}</p>
        @enderror

        <br><br>

        <!-- Email -->
        <input type="text" name="email" value="{{ old('email') }}" placeholder="Enter email">
        
        <br><br>

        @error('email')
            <p style="color:red">{{ $message }}</p>
        @enderror
        
        <br><br>

        <button type="submit">Submit</button>

    </form>

</body>
</html>