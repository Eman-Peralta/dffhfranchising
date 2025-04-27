<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DFFH</title>
</head>
<body>
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-address" >
                <p>Puregold Building, Commonwealth Avenue,<br> Fairview Park Subdivision, Brgy, 1121 Metro Manila</p>
            </div>
            <div class="footer-logo">
                <img src="img/dffhLogo-removebg.png" alt="DFFH - Franchising">
            </div>
            <div class="footer-contact">
                <p>Email: dffhi888@gmail.com<br>Phone: 0906 524 5544</p>
            </div>
        </div>
        <p id="copyright"></p>
        <script>
            const currentYear = new Date().getFullYear();
            if (currentYear !== 2025) {
            document.getElementById('copyright').innerHTML = `Copyright © 2025 - ${currentYear} DFFHI®. All rights reserved.`;
            } else {
            document.getElementById('copyright').innerHTML = `Copyright © 2025 DFFHI®. All rights reserved. Designed by Peralta, E.M & Legaria R.A (ITGENO - Technologies)`;
            }
        </script>
    </footer>
</body>
</html>