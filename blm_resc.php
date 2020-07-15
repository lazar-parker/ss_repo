<!DOCTYPE HTML>
<?php
  include "common_new.php";
  include "header.php";
?>
    <!-- Heading -->
      <div id="heading" >
        <h1><?= $alumni["alumni_name"] ?></h1>
      </div>

    <!-- Main -->
      <section id="main" class="wrapper">
        <div class="inner">
          <div class="content">
            <h3>Black Lives Matter Resources</h3>
            <p><?= $alumni["alumni_bio"] ?></p>
            <div class="table-wrapper">
              <table>
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Alpha</td>
                    <td>Ante turpis integer aliquet porttitor.</td>
                    <td>10.00</td>
                  </tr>
                  <tr>
                    <td>Beta</td>
                    <td>Vis ac commodo adipiscing arcu aliquet.</td>
                    <td>20.00</td>
                  </tr>
                  <tr>
                    <td>Gamma</td>
                    <td>Morbi faucibus arcu accumsan lorem.</td>
                    <td>30.00</td>
                  </tr>
                  <tr>
                    <td>Delta</td>
                    <td>Vitae integer tempus condimentum.</td>
                    <td>40.00</td>
                  </tr>
                  <tr>
                    <td>Epsilon</td>
                    <td>Ante turpis integer aliquet porttitor.</td>
                    <td>50.00</td>
                  </tr>
                  <tr>
                    <td>Zeta</td>
                    <td>Vis ac commodo adipiscing arcu aliquet.</td>
                    <td>60.00</td>
                  </tr>
                  <tr>
                    <td>Eta</td>
                    <td>Morbi faucibus arcu accumsan lorem.</td>
                    <td>70.00</td>
                  </tr>
                  <tr>
                    <td>Theta</td>
                    <td>Vitae integer tempus condimentum.</td>
                    <td>80.00</td>
                  </tr>
                </tbody>
                <tfoot>
                  <tr>
                    <td colspan="2"></td>
                    <td>360.00</td>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </section>

<?php
  include "footer.php";
?>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
