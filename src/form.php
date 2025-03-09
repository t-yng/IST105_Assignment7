<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment#6 | IST105</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
      }

      h1 {
        text-align: center;
      }

      .form-group {
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        left: -16px;
        margin-bottom: 15px;
      }

      label {
        margin-right: 6px;
      }

      input[type="number"] {
        width: 140px;
        padding: 5px;
      }

      button {
        display: block;
        margin: 0 auto;
        padding: 10px 20px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }

      button:hover {
          background-color: #0056b3;
      }
    </style>
  </head>
  <body>
    <h1>Assignment#6 IST105</h1>
    <form action="/process.php" method="GET">
      <div class="form-group">
        <label for="a">A: </label>
        <input type="number" id="a" name="a" />
      </div>
      <div class="form-group">
        <label for="b">B: </label>
        <input type="number" id="b" name="b" />
      </div>
      <div class="form-group">
        <label for="c">C: </label>
        <input type="number" id="c" name="c" />
      </div>
      <div class="form-group">
        <label for="d">D: </label>
        <input type="number" id="d" name="d" />
      </div>
      <div class="form-group">
        <label for="e">E: </label>
        <input type="number" id="e" name="e" />
      </div>
      <button>Submit</button>
    </form>
  </body>
</html>
