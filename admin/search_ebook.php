

<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        /* Style for the navigation bar */
        .navbar {
            background-color: #bebebe;
            overflow: hidden;
        }

        /* Style for the logo */
        .navbar img {
            float: left;
            padding: 10px;
        }

        /* Style for the title */
        .navbar .title {
            text-align: center;
            color: white;
            padding: 10px;
            margin: 0 auto;
        }

        
        
       
        
        body {
  font-family: 'Arial', sans-serif;
  margin: 0;
  padding: 0;
}

.main-menu {
  background-color: #333;
  overflow: hidden;
}

.main-menu ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

.main-menu ul li {
  float: left;
}

.main-menu ul li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.main-menu ul li:hover {
  background-color: #555;
}

.submenu ul {
  display: none;
  position: absolute;
  background-color: #333;
}

.submenu:hover ul {
  display: block;
}

.submenu ul li {
  float: none;
  display: block;
}

.submenu ul li a {
  padding: 12px 16px;
}

.submenu ul li:hover {
  background-color: #555;
}

#logoutForm {
        position: absolute;
        top: 10px; /* Adjust the top distance as needed */
        right: 10px; /* Adjust the right distance as needed */
    }
footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

         .header {
           color: #fff;
            box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
            padding: 12px 0;
            text-align: center;
        }

        

        .search-container {
          color: #fff;
            margin-top: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .search-container input[type="text"] {
            padding: 10px;
            width: 70%;
            border: none;
            border-radius: 25px;
            margin-right: 10px;
        }

        .search-container select {
            padding: 10px;
            border: none;
            border-radius: 25px;
            margin-right: 10px;
        }

        .search-container button {
            padding: 10px 20px;
            background-color: #3897f0;
            color: white;
            border: none;
            border-radius: 25px;
            cursor: pointer;
        }

        .search-container button:hover {
            background-color: #26689e;
        }

        .results-container {
            margin-top: 20px;
            background-color: #fff;
            margin-bottom: 80px;
        }

        .result-card {
            background-color: #fff;
            margin-bottom: 15px;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }

        .result-card h2 {
            font-size: 1.2rem;
            margin-bottom: 10px;
        }

        .result-card a {
            color: #3897f0;
            text-decoration: none;
            font-weight: bold;
        }

        .search-result {
            margin-bottom: 20px;
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #fff;
        }

        .title {
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .download-link a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }

        .download-link a:hover {
            text-decoration: underline;
        }
        
        

    
 
    </style>

</head>
<body style="background-image: url('../images/background/bookshelf.jpg');">

<div class="navbar">
    <img src="Sveri Logo1.png" alt="Logo" height="150px" width="150px" style="margin-left: 45px;">
    <div class="title"><h1 style="color: black; margin-top: 50px;"> SVERI's COE(Poly), Pandharpur<br>Library</h1></div>
</div>

<div class="container11 ">


<nav class="main-menu">
  <ul>
    <li><a href="adminl.php">Home</a></li>

    <li class="submenu">

      <a href="#"> Manage Membership</a>
      <ul>
        <li> <a href="membershipform.php">Create Member</a></li>
        <li> <a href="update_member.php">Update Member</a></li>
        <li> <a href="delete_member.php">Delete Member</a></li>
      </ul>
    </li>

    <li class="submenu">
      <a href="#"> Manage Book</a>
      <ul>
      <li> <a href="addbook.php">Add book</a></li>
      <li> <a href="bookdis.php">View books</a></li>
      <li> <a href="add_ebook.php">Add E-book</a></li>
      <li> <a href="search_ebook.php">View E-books</a></li>
      </ul>
    </li>

    <li class="submenu">
      <a href="#">Circulation </a>
      <ul>
      <li> <a href="issuesbook.php">Issue book</a></li>
      <li> <a href="returnbook.php">Return books</a></li>
      <li> <a href="report.php">Report</a></li>
        <li></li>
      </ul>
    </li>

    <li class="submenu">
      <a href="#">Report</a>
      <ul>
      <li> <a href="library_user_report.php">Librarian</a></li>
      <li> <a href="user_report.php">Student</a></li>
      </ul>
    </li>

    <li class="submenu">
      <a href="#">Study Material</a>
      <ul>
      <li> <a href="add_model_answer.php">Add Model Answer</a></li>
      <li> <a href="add_ejournal.php">Add Journals</a></li>
      <li> <a href="search_model_answer.php">View Model Answers</a></li>
      <li> <a href="search_ejournal.php">View Journals</a></li>
      </ul>
    </li>

    <li class="submenu">
      <a href="#">Manage users</a>
      <ul>
      <li> <a href="register_user.php">Create user</a></li>
      <li> <a href="update_user.php">Update user</a></li>
      <li> <a href="staff_registration.php">Create Librarian</a></li>
      <li> <a href="update_libusers.php">Update Librarian</a></li>
      </ul>
    </li>

    <li class="submenu">
      <a href="new_arrival.php">New Arrival</a>
    </li>
 
  </ul>
</nav>
</div>

    
    
 

   
      
        <form id="logoutForm">
            <button type="button" class="btn btn-danger" onclick="logout()">Logout</button>
        </form>

        <footer>
    <p>&copy; 2024 Sveri Libary</p>
</footer>
        
    </div>
</div>
<body onload="searchBooks()">
    <div class="header">
        <h1>Search for E-book</h1>
    </div>

    <div class="container">
        <div class="search-container">
            <input type="text" id="searchInput" placeholder="Enter book title...">
            <select id="departmentSelect">
                <option value="IT">Information Technology</option>
                <option value="computer">Computer</option>
                <option value="civil">Civil</option>
                <option value="electronics">Electronics and Telecommunication</option>
                <option value="electrical">Electrical</option>
                <option value="mechanical">Mechanical</option>
            </select>
            <button onclick="searchBooks()">Search</button>
        </div>

        <div class="results-container" id="searchResults"></div>
    </div>

    <script>
        function searchBooks() {
            var searchTerm = document.getElementById('searchInput').value;
            var department = document.getElementById('departmentSelect').value;
            var xhr = new XMLHttpRequest();
           xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
        var resultsContainer = document.getElementById('searchResults');
        var searchResults = xhr.responseText;

        // Replace placeholders for "Update" and "Delete" buttons
        searchResults = searchResults.replace(/{{updateButton}}/g, '<button class="update-button" data-book-id="{{bookId}}">Update</button>');
        searchResults = searchResults.replace(/{{deleteButton}}/g, '<button class="delete-button" data-book-id="{{bookId}}">Delete</button>');

        resultsContainer.innerHTML = searchResults;
        resultsContainer.style.animation = 'fadeIn 0.5s ease forwards';

        // Add event listeners for update and delete (outside of the XHR callback)
        var updateButtons = document.getElementsByClassName('update-button');
        for (var i = 0; i < updateButtons.length; i++) {
            updateButtons[i].addEventListener('click', function () {
                // Handle update functionality here
                var bookId = this.getAttribute('data-book-id');
                var newTitle = prompt('Enter new title for the book:');
                if (newTitle !== null) {
                }
            });
        }

        var deleteButtons = document.getElementsByClassName('delete-button');
        for (var i = 0; i < deleteButtons.length; i++) {
            deleteButtons[i].addEventListener('click', function () {
                // Handle delete functionality here
                var bookId = this.getAttribute('data-book-id');
                if (newTitle !== null) {
                    // Send an AJAX request to update the title
                    var xhr = new XMLHttpRequest();
                    xhr.onreadystatechange = function () {
                        if (xhr.readyState == 4 && xhr.status == 200) {
                            // Check if the update was successful
                            if (xhr.responseText === 'success') {
                                alert('Book title updated successfully.');
                                // You can also update the UI to reflect the new title
                            } else {
                                alert('Failed to update the book title.');
                            }
                        }
                    };

                    xhr.open('POST', 'update_title.php', true);
                    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                    xhr.send('bookId=' + bookId + '&newTitle=' + newTitle);
                }
            });
        }
    }
};

            xhr.open('GET', 'search_ebook_process.php?search=' + searchTerm + '&department=' + department, true);
            xhr.send();
        }
    </script>
    </body>


</body>
<script>
    
   

   
 

    function logout() {
        // Create a form element and append it to the body
        var form = document.createElement("form");
        form.id = "hiddenForm";
        form.method = "post";
        form.action = "admin_logout.php";

        // Submit the form to log out
        document.body.appendChild(form);
        document.getElementById("hiddenForm").submit();
    }
   
  

   

     
</script>
</html>
