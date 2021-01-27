<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todolist</title>
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    background-color: rgb(231, 228, 224);
    font-family: 'Titillium Web', sans-serif;
}

.container {
    max-width: 1140px;
    margin: 0 auto;
}

header {
    text-align: center;
    min-height: 150px;
    background-color: bisque;
    padding-top: 1.5rem;
}
.form {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 2rem;
}
table td {
    
    padding: 0.5rem 1rem;
    border-bottom: 1px solid #ddd;
}
table {
    border: 0px;
    padding: 0.5rem 0rem;
}
table th {
    font-size: 1.3rem;
    padding: 0.5rem 1rem;
}
table tr:nth-child(even) {
    background-color: #f1f1f1;
}
table tr:nth-child(odd) {
    background-color: #c7c7c7;
}
a {
    text-decoration: none;
    color: black;
}

.update-button {
    background-color: #64cc68;
    text-transform: uppercase;
    font-weight: bold;
}

.update-button:hover {
    background-color: #56b159;
}

.delete-button {
    background-color: #d44e4e;
    text-transform: uppercase;
    font-weight: bold;
}

.delete-button:hover {
    background-color: #c03535;
}
.submit {
    background-color: #30BAE7;
    border: none;
    border-radius: 5px;
    margin: 0 auto;
    font-size: 25px;
    text-transform: uppercase;
    font-weight: bold;
    margin-top: 30px;
    cursor: pointer;
    padding: 10px 20px;
}

.cancel {
    background-color: #d44e4e;
    border: none;
    border-radius: 5px;
    margin: 0 auto;
    font-size: 25px;
    text-transform: uppercase;
    font-weight: bold;
    margin-top: 30px;
    cursor: pointer;
    padding: 10px 20px;
}

.cancel:hover {
    background-color: #c03535;
}

.submit:hover {
    background-color: #207a97;
    
}
input[type="text"],
input[type="password"],
textarea {
    color: white;
    background-color: #344fa0;
    border: none;
    font-size: 18px;
    margin: 0 auto;
    border-radius: 5px;
    padding-left: 15px;
}

button[name="delete"] {
    border:none;
    cursor:pointer;

}

textarea {
    height: 200px;
    width: 30rem;
    padding-top: 15px;
    display: flex;
    margin-top: 2rem;
    
}

input[type="text"]::placeholder,
textarea::placeholder {
    color: gray;
}

input[type="text"], input[type="password"]
 {
    width: 100%;
    height: 56px;
    display: flex;
}
label[for="status"] {
    font-size: 2rem;
    margin-bottom: 0.5rem;
}

select[name="done"] {
    margin-top: 2rem;
    background: #207a97;
    color: white;
    padding: 0.5rem;
    width: 30rem;
    display: flex;
    margin: 0 auto;
    font-size: 1.5rem;
    border-radius: 5px;
}
        </style>
</head>
<body>
    @yield('content')
</body>
</html>
<!DOCTYPE html>