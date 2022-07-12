<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./mealplan.css">
    <style>
        #continue:hover {
            background-color: rgb(102, 131, 102);
        }

        label {
            width: 100px;
            display: inline-block;
        }
    </style>
</head>

<body>
    <?php
    if (isset($_POST['continue'])) {
        print_r($_POST);
        echo "submission successful";
    }
    ?>
    <main class="registercontainer" id="registercontainer">
        <div>
            <img src="https://tse1.mm.bing.net/th?id=OIP.01bQlL7FMpc4aVcjOC29AQHaE8&pid=Api&P=0&w=271&h=181" alt="image">
        </div>
        <form class="contentcontainer" action="./mealplanpart2.php" method="POST">
            <h3>Personal Meal Plan Form </h3>
            <div>
                <label for="fullname">Name: </label>
                <input type="name" id="fullname" name="fullname" placeholder="fullname" required />
            </div>
            <div>
                <label for="email">Email: </label>
                <input type="email" id="email" name="email" placeholder="@gmail.com" required />
            </div>
            <div>
                <label for="age">Age: </label>
                <input type="number" id="age" name="age" required />
            </div>
            <div>
                <label for="height">Height: </label>
                <input type="number" id="height" name="height" placeholder="cm" required />
            </div>
            <div>
                <label for="weight">Weight: </label>
                <input type="number" id="weight" name="weight" placeholder="kg" required />
            </div>
            <div>
                <label for="goalweight">Goal Weight: </label>
                <input type="number" id="goalweight" name="goalweight" placeholder="kg" required />
            </div>

            <div class="job">
                <p> <strong>Activity Level: </strong></p>
                <label for="jobdescription"> Occupation </label>
                <select id="job">
                    <option value="JobDescription">Select from list</option>
                    <option value="Sitting"> Sitting</option>
                    <option value="Standing">Standing</option>
                    <option value="Moving">Moving</option>
                    <option value="Active">Active</option>
                </select>
                <!-- <input type="submit" value="submit"> -->
            </div>

            <div>
                <label for="walking">Walking: </label>
                <input type="number" id="walking" name="walking" placeholder="Estimated hours/per week" required />
            </div>
            <div>
                <label for="cycling">Cycling: </label>
                <input type="number" id="cycling" name="cycling" placeholder="Estimated hours/per week" />
            </div>
            <div>
                <label for="gym">Gym:</label>
                <input type="number" id="gym" name="gym" placeholder="days/per week" />
            </div>
            <div>
                <label for="otheractivity">Other Activity/Sports: </label>
                <input type="number" id="otheractivity" name="otheractivity" placeholder="Estimated hours/per week" />
            </div>
            <div>
                <label for="sleep">Sleep: </label>
                <input type="number" id="sleep" name="sleep" placeholder="Estimated hours/per night" required />
            </div>
            <p></p>
            <div class="buttoncontainer"> <a href="./personalized.html"></a>
                <button type="submit" id="continue"> <strong>Continue </strong></button>
            </div>
        </form>
    </main>
    <!-- <script>
        let click = document.querySelector('.click');
        let list = document.querySelector('.list');
        click.addEventListener("click", () => {
            list.classList.toggle('newlist');
        });
    </script> -->
</body>

</html>