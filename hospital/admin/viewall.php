<div class="row">
            <h3>Private</h3>
            <button type="button" class="click" id="MybtnPreventHTML"  data-target="#MymodalPreventHTML" data-toggle="modal" data-backdrop="static" data-keyboard="false">+ Add room</button>
    <!-----MODALLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLL---->
     <!-----MODALLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLL---->
      <!-----MODALLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLL---->
       <!-----MODALLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLL---->
        <!-----MODALLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLL---->
   
	        <!-- .modal -->
	<div class="modal fade" id="MymodalPreventHTML">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h1 class="modal-title">Private</h1>     
                    <button type="button" class="close" data-dismiss="modal">×</button>                                                         
				</div> 
				<div class="modal-body">
                    <form action="../config.php" method="POST">
                                <div class="data">
                                    <label>Room Type</label>
                                    <input class="input" type="text" name="room_type">
                                </div>
                                <div class="data">
                                    <label>Room Number</label>
                                    <input class="input"type="text" name="room_number">
                                </div>
                                <div class="data">
                                    <label>Room Capacity</label>
                                    <input class="input" type="text" name="room_capacity">
                                </div>
                     

				</div>   
				<div class="modal-footer"> 
                   <button type="submit" class="click2"  name="save">Save</button>
                   <button type="submit" class="click1" data-dismiss="modal">Cancel</button>
				</div>
                </form>
			</div>                                                                       
		</div>                                          
	</div>