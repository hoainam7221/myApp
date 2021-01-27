<div id="main">
  		<table>
  			<thead>
  				<th>ID</th>
  				<th>Ảnh SP</th>
  				<th>Tên SP</th>
  				<th>Giá SP</th>
  				<th></th>
  				<th></th>
  			</thead>

  			<tbody>

  				<?php 
  					$query = "SELECT * FROM product";
  					$rs = mysqli_query( $Conn, $query );
  					if( mysqli_num_rows( $rs ) > 0  )
  						while( $row = mysqli_fetch_assoc( $rs ) ){
  				?>
  					<tr>
  						<td><?= $row['ID'] ?></td>
  						<td><img class="anh-sp" src="../Img/<?= $row['Image']?>"/></td>
  						<td><?= $row['Name']?></td>
  						<td><?= $row['Price'] . " đ"?> </td> 
              <!-- chu y ten phai match voi ten cot trong db -->
  						<td><a href="suasp.php?id=<?= $row['ID']?>">Sửa</a></td>
  						<td><a href="?idxoa=<?= $row['ID']?>">Xóa</a></td>
  					</tr>

  				<?php 

  					}

				  ?>
				  <?php 
  					$query = "SELECT * FROM dienthoai";
  					$rs = mysqli_query( $Conn, $query );
  					if( mysqli_num_rows( $rs ) > 0  )
  						while( $row = mysqli_fetch_assoc( $rs ) ){
  				?>
  					<tr>
  						<td><?= $row['ID'] ?></td>
  						<td><img class="anh-sp" src="../Img/<?= $row['Image']?>"/></td>
  						<td><?= $row['Name']?></td>
  						<td><?= $row['Price'] . " đ"?> </td> 
              <!-- chu y ten phai match voi ten cot trong db -->
  						<td><a href="suasp.php?id=<?= $row['ID']?>">Sửa</a></td>
  						<td><a href="?idxoa=<?= $row['ID']?>">Xóa</a></td>
  					</tr>

  				<?php 

  					}

				  ?>
				  <?php 
  					$query = "SELECT * FROM phukien";
  					$rs = mysqli_query( $Conn, $query );
  					if( mysqli_num_rows( $rs ) > 0  )
  						while( $row = mysqli_fetch_assoc( $rs ) ){
  				?>
  					<tr>
  						<td><?= $row['ID'] ?></td>
  						<td><img class="anh-sp" src="../Img/<?= $row['Image']?>"/></td>
  						<td><?= $row['Name']?></td>
  						<td><?= $row['Price'] . " đ"?> </td> 
              <!-- chu y ten phai match voi ten cot trong db -->
  						<td><a href="suasp.php?id=<?= $row['ID']?>">Sửa</a></td>
  						<td><a href="?idxoa=<?= $row['ID']?>">Xóa</a></td>
  					</tr>

  				<?php 

  					}

  				?>
  					
  			</tbody>
  		</table>
  	</div><!-- #main -->
