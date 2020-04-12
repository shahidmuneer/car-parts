<?php $__env->startSection('content'); ?>
<form id="logoutform" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
    <?php echo e(csrf_field()); ?>

</form>
<section class="dashboard section">
	<!-- Container Start -->
	<div class="container">
		<!-- Row Start -->
		<div class="row">
			<div class="col-md-10 offset-md-1 col-lg-4 offset-lg-0">
				<div class="sidebar">
					<!-- User Widget -->
					<div class="widget user-dashboard-profile">
						<!-- User Image -->
						<div class="profile-thumb">
							<img src="images/user/user-thumb.jpg" alt="" class="rounded-circle">
						</div>
						<!-- User Name -->
						<h5 class="text-center"><?php echo e(\Auth::user()->name??""); ?></h5>
						<p>Joined <?php echo e(Auth::user()->created_at->diffForHumans()); ?></p>
						<a href="user-profile.html" class="btn btn-main-sm">Edit Profile</a>
					</div>
					<!-- Dashboard Links -->
					<div class="widget user-dashboard-menu">
						<ul>
							<li class="active">
								<a href="dashboard-my-ads.html"><i class="fa fa-user"></i> My Ads</a></li>
							
							
							<li>
								<a href="#" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
									<i class="fa fa-cog"></i> Logout</a>
							</li>
							
						</ul>
					</div>

					<!-- delete-account modal -->
											  <!-- delete account popup modal start-->
                <!-- Modal -->
                <div class="modal fade" id="deleteaccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                  aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header border-bottom-0">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body text-center">
                        <img src="images/account/Account1.png" class="img-fluid mb-2" alt="">
                        <h6 class="py-2">Are you sure you want to delete your account?</h6>
                        <p>Do you really want to delete these records? This process cannot be undone.</p>
                        <textarea name="message" id="" cols="40" rows="4" class="w-100 rounded"></textarea>
                      </div>
                      <div class="modal-footer border-top-0 mb-3 mx-5 justify-content-lg-between justify-content-center">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-danger">Delete</button>
                      </div>
                    </div>
                  </div>
				</div>
				
                <!-- delete account popup modal end-->
					<!-- delete-account modal -->

				</div>
			</div>
			<div class="col-md-10 offset-md-1 col-lg-8 offset-lg-0">
				<!-- Recently Favorited -->
				<div class="widget dashboard-container my-adslist">
					<h3 class="widget-header">My Ads</h3>
					<?php if(\Session::has('success')): ?>
    <div class="alert alert-success">
        <ul>
            <li><?php echo \Session::get('success'); ?></li>
        </ul>
    </div>
			<?php endif; ?>
					<table class="table table-responsive product-dashboard-table">
						<thead>
							<tr>
								<th>Image</th>
								<th>Product Title</th>
								<th class="text-center">Details</th>
								<th class="text-center">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td class="product-thumb">
									<img width="80px" height="auto" src="<?php echo e(!empty($ad->media[0])?$ad->media[0]->link:""); ?>" alt="image description"></td>
								<td class="product-details">
									<h3 class="title"><?php echo e($ad->title); ?></h3>
									<span class="add-id"><strong>Ad ID:</strong> <?php echo e($ad->id); ?></span>
									<span><strong>Posted on: </strong><time><?php echo e($ad->created_at->diffForHumans()); ?></time> </span>
									<span class="status active"><strong>Status</strong>Active</span>
									<span class="location"><strong>Location</strong><?php echo e($ad->location); ?></span>
								</td>
								<td class="product-category"><span class="categories">
									<p><?php echo e($ad->make->name??""); ?> | <?php echo e($ad->model->name??""); ?> | <?php echo e($ad->type->name??""); ?></p>
									<?php $__currentLoopData = $ad->parts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $part): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<span><?php echo e($part->part->name); ?></span>,
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									
								</span></td>
								<td class="action" data-title="Action">
									<div class="">
										<ul class="list-inline justify-content-center">
											
											<li class="list-inline-item">
												<a data-toggle="tooltip" data-placement="top" title="Edit" class="edit" href="/update-ad/<?php echo e($ad->id); ?>">
													<i class="fa fa-pencil"></i>
												</a>
											</li>
											<li class="list-inline-item">
												<a data-toggle="tooltip" data-placement="top" title="Delete" class="delete" href="/delete-ad/<?php echo e($ad->id); ?>">
													<i class="fa fa-trash"></i>
												</a>
											</li>
										</ul>
									</div>
								</td>
							</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</tbody>
					</table>

				</div>

				<!-- pagination -->
				<div class="pagination justify-content-center">
					
					<?php echo e($ads->links()); ?>

				</div>
				<!-- pagination -->

			</div>
		</div>
		<!-- Row End -->
	</div>
	<!-- Container End -->
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.mainTable', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\php projects\classified ads\Laravel-Classimax-Directory-2019\resources\views/userdashboard/ads.blade.php ENDPATH**/ ?>