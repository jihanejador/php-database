<?php include '../includes/header.php'; ?> 
<?php include '../config/db.php' ;   ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body>

<?php if (isset($_GET['error'])) {
    if ($_GET['error'] == "Tous les champs sont obligatoires") {
        echo "<div class='bg-red-100 text-red-700 p-3 rounded-lg mb-4'>
        Tous les champs sont obligatoires
        </div>";
    }
    if ($_GET['error'] == "fomat unvalidate") {
        echo "<div class='bg-red-100 text-red-700 p-3 rounded-lg mb-4'>
        format d'email invalidate
        </div>";
    }
    if ($_GET['error'] == "Email ou mot de passe incorrect") {
        echo "<div class='bg-red-100 text-red-700 p-3 rounded-lg mb-4'>
        Email ou mot de passe incorrect
        </div>";
    }
} ?>

<form method="POST" action="login_process.php">

<section class="bg-purple-50 dark:bg-purple-900">
  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">

      <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-purple-800 dark:border-purple-700">
          <div class="p-6 space-y-4 md:space-y-6 sm:p-8">

              <h1 class="text-xl font-bold leading-tight tracking-tight text-purple-900 md:text-2xl dark:text-white">
                  Sign in to your account
              </h1>

              <form class="space-y-4 md:space-y-6" method="POST" action="login_process.php">

                  <div>
                      <label class="block mb-2 text-sm font-medium text-purple-900 dark:text-white">
                          Your email
                      </label>
                      <input type="text" name="email"
                          class="bg-purple-50 border border-purple-300 text-purple-900 rounded-lg block w-full p-2.5 dark:bg-purple-700 dark:border-purple-600 dark:text-white"
                          placeholder="name@company.com">
                  </div>

                  <div>
                      <label class="block mb-2 text-sm font-medium text-purple-900 dark:text-white">
                          Password
                      </label>
                      <input type="password" name="password"
                          class="bg-purple-50 border border-purple-300 text-purple-900 rounded-lg block w-full p-2.5 dark:bg-purple-700 dark:border-purple-600 dark:text-white"
                          placeholder="••••••••">
                  </div>

                  <div class="flex items-center justify-between">
                      <div class="flex items-center h-5">
                          <input type="checkbox"
                              class="w-4 h-4 border border-purple-300 rounded bg-purple-50 dark:bg-purple-700 dark:border-purple-600">
                          <label class="ml-3 text-sm text-purple-500 dark:text-purple-300">Remember me</label>
                      </div>

                      <a href="#" class="text-sm font-medium text-purple-600 hover:underline">
                          Forgot password?
                      </a>
                  </div>

                  <button type="submit"
                      class="w-full text-white bg-purple-600 hover:bg-purple-700 font-medium rounded-lg text-sm px-5 py-2.5">
                      Sign in
                  </button>

                  <p class="text-sm text-purple-500">
                      Don’t have an account yet?
                      <a href="#" class="font-medium text-black hover:underline dark:text-purple-400">
                          Sign up
                      </a>
                  </p>

              </form>

          </div>
      </div>
  </div>
</section>

</form>

</body>
</html>

<?php include '../includes/footer.php'; ?>