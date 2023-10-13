<!DOCTYPE html>
<html>

<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <style>
    table {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td {
      border: 1px solid #ddd;
      padding: 8px;
    }
    img{
      width: 100px;
    }


    th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #04AA6D;
      color: white;
      border: 1px solid #ddd;
      padding: 8px;
    }
  </style>
</head>

<body>

  <h1>TheCocktailDB</h1>
  <div class="container">
    <table>
      <thead>
      <tr>
        <th>Drink</th>
        <th>Image</th>
      </tr>
      </thead>
      <tbody id='table_body'>

      </tbody>
      

    </table>
  </div>


  <script>
      
   fetch('https://www.thecocktaildb.com/api/json/v1/1/search.php?f=a')
   .then(response=>response.json())
   .then(objectData => {

    let tableData='';

    objectData.drinks.map((drink)=>{
      tableData += `
  <tr>
    <td><button id='myBtn' onclick="alert('Category: ${drink.strCategory}\\nAlcoholic: ${drink.strAlcoholic}\\nGlass: ${drink.strGlass}')">${drink.strDrink}</button></td>
    <td><img src="${drink.strDrinkThumb}" /></td>
    
  </tr>
  
`;

    });
    document.getElementById('table_body').innerHTML=tableData;
   }).catch(error => console.error('Error fetching data:', error));

  </script>
</body>

</html>