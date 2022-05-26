
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,600,700">
  <title>Contact Form - Day 1</title>
</head>
<style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: Montserrat, "sans-serif";
  background-color: #f4f4f4;
  font-weight: 400;
}

.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 32px;
}

.grid {
  display: grid;
  column-gap: 80px;
  row-gap: 24px;
  align-items: end;
}

.form {
  width: 100%;
  max-width: 400px;
  margin: 64px auto 0;
  background-color: #fff;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
  padding: 24px 32px;
  border-radius: 11px;

  .form-title {
    font-size: 28px;
    font-weight: 700;
    color: #21325e;
    text-align: center;
    margin-bottom: 32px;
  }

  .form-group {
    margin-bottom: 24px;

    input,
    textarea {
      display: inline-block;
      width: 100%;
      padding: 16px 8px;
      font-family: inherit;
      font-size: 14px;
      color: #000 !important;
      border: none;
      outline: none;

      &::placeholder {
        color: #37595e;
      }

      &:focus {
        border-color: #21325e;
      }
    }

    input {
      border-bottom: 1px solid #ddd;
    }

    textarea {
      border: 1px solid #ddd;
      height: 100px;
      resize: none;
      border-radius: 11px;
    }
  }

  .btn {
    display: inline-block;
    border: none;
    outline: none;
    background-color: #21325e;
    color: #fff;
    font-family: inherit;
    font-size: 14px;
    padding: 16px 32px;
    border-radius: 1000px;
    cursor: pointer;
  }
}

@media screen and (min-width: 768px) {
  .grid {
    grid-template-columns: 1fr 1fr;
  }

  .form {
    max-width: 800px;
  }

  .btn {
    grid-column: 1 / -1;
    justify-self: end;
  }
}

</style>
<body>
  <div class="container">
    <form class="form">
      <h1 class="form-title">Message me</h1>
      <div class="grid">
        <div class="form-group">
          <input type="text" name="name" id="name" placeholder="Full name">
        </div>
        <div class="form-group">
          <input type="email" name="email" id="email" placeholder="Your email">
        </div>
        <div class="form-group">
          <input type="text" name="subject" id="subject" placeholder="Subject">
        </div>
        <div class="form-group">
          <textarea name="message" id="message" placeholder="Your message goes here"></textarea>
        </div>
        <button type="submit" class="btn">Send message</button>
      </div>
    </form>
  </div>
</body>

</html>