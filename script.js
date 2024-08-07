
        // Function to update date and time
        function updateDateTime() {
            // Get current date and time
            var currentDateTime = new Date();

            // Format the date and time
            var formattedDateTime = currentDateTime.toLocaleString();

            // Display the date and time on the webpage
            document.getElementById("datetime").innerHTML =  formattedDateTime;
        }

        // Call the function initially to display the current date and time
        updateDateTime();

        // Update the date and time every second (1000 milliseconds)
        setInterval(updateDateTime, 1000);



        