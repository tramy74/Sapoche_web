<!DOCTYPE html>
<html>
<head>
  <style>
    * {
    box-sizing: border-box;
}

body {
    font-family: Arial, Helvetica, sans-serif;
}


/* Style the header */

header {
    background-color: #666;
    padding: 30px;
    text-align: center;
    font-size: 35px;
    color: white;
}


/* Create two columns/boxes that floats next to each other */

nav {
    float: left;
    width: 30%;
    height: 300px;
    /* only for demonstration, should be removed */
    background: #ccc;
    padding: 20px;
}


/* Style the list inside the menu */

nav ul {
    list-style-type: none;
    padding: 0;
}

article {
    float: left;
    padding: 20px;
    width: 70%;
    background-color: #f1f1f1;
    height: 300px;
    /* only for demonstration, should be removed */
}


/* Clear floats after the columns */

section::after {
    content: "";
    display: table;
    clear: both;
}


/* Style the footer */

footer {
    background-color: #777;
    padding: 10px;
    text-align: center;
    color: white;
}

article table {
    width: 100%;
    border-collapse: collapse;
}

article th,
article td {
    border: 1px solid black;
    padding: 8px;
    text-align: center;
}

.fa-plus {
    color: green;
}

.fa-pen {
    color: blue;
}

.fa-eraser {
    color: red;
}

button {
    background-color: white;
}

img {
    width: 50%;
}
  </style>
</head>
<body>
  <article>
    <table id="myTable">
      <tr>
        <th>Header 1</th>
        <th>Header 2</th>
        <th>Header 3</th>
      </tr>
      <tr>
        <td>Cell 1</td>
        <td>Cell 2</td>
        <td>Cell 3</td>
      </tr>
    </table>
  </article>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script scr="admin.js">
  </script>
</body>
</html>
