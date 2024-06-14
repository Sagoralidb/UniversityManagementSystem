	 <script>
        function updateClock() {
            // Create a new Date object
            var now = new Date();

            // Get the current time
            var hours = now.getHours();
            var minutes = now.getMinutes();
            var seconds = now.getSeconds();

            // Format hours, minutes, and seconds with leading zeros if needed
            hours = hours < 10 ? '0' + hours : hours;
            minutes = minutes < 10 ? '0' + minutes : minutes;
            seconds = seconds < 10 ? '0' + seconds : seconds;

            // Get the current date
            var year = now.getFullYear();
            var month = now.getMonth() + 1; // Month is zero-based
            var day = now.getDate();

            // Format date components with leading zeros if needed
            month = month < 10 ? '0' + month : month;
            day = day < 10 ? '0' + day : day;

            // Display the live clock and date in the "liveClock" element
            document.getElementById('liveClock').innerHTML = year + '-' + month + '-' + day + ' ' + hours + ':' + minutes + ':' + seconds;
        }

        // Update the clock every second
        setInterval(updateClock, 1000);

        // Call the updateClock function initially
        updateClock();
    </script>