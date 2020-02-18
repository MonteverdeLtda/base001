<?php 
?>
<div class="page-title">
	<div class="title_left">
		<h3><?= $title; ?></h3>
	</div>
</div>
<div class="clearfix"></div>

<div id="me-accounts">
	<div class="row">
		<router-view :key="$route.fullPath" ></router-view>
	</div>
</div>

<template id="home">
	<div>
		<div class="col-md-12">
			<div class="x_panel">
			  <div class="x_content">
				<div class="row">
				  <div class="col-md-12 col-sm-12 col-xs-12 text-center">
					<ul class="pagination pagination-split">
					  <li><a href="#">A</a></li>
					  <li><a href="#">B</a></li>
					  <li><a href="#">C</a></li>
					  <li><a href="#">D</a></li>
					  <li><a href="#">E</a></li>
					  <li>...</li>
					  <li><a href="#">W</a></li>
					  <li><a href="#">X</a></li>
					  <li><a href="#">Y</a></li>
					  <li><a href="#">Z</a></li>
					</ul>
				  </div>
				  <div class="clearfix"></div>
				  
				  
				  <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
					<div class="well profile_view">
					  <div class="col-sm-12">
						<h4 class="brief"><i>Digital Strategist</i></h4>
						<div class="left col-xs-7">
						  <h2>Nicole Pearson</h2>
						  <p><strong>About: </strong> Web Designer / UX / Graphic Artist / Coffee Lover </p>
						  <ul class="list-unstyled">
							<li><i class="fa fa-building"></i> Address: </li>
							<li><i class="fa fa-phone"></i> Phone #: </li>
						  </ul>
						</div>
						<div class="right col-xs-5 text-center">
						  <img src="/public/assets/images/img.jpg" alt="" class="img-circle img-responsive">
						</div>
					  </div>
					  <div class="col-xs-12 bottom text-center">
						<div class="col-xs-12 col-sm-6 emphasis">
						  <p class="ratings">
							<a>4.0</a>
							<a href="#"><span class="fa fa-star"></span></a>
							<a href="#"><span class="fa fa-star"></span></a>
							<a href="#"><span class="fa fa-star"></span></a>
							<a href="#"><span class="fa fa-star"></span></a>
							<a href="#"><span class="fa fa-star-o"></span></a>
						  </p>
						</div>
						<div class="col-xs-12 col-sm-6 emphasis">
						  <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
							</i> <i class="fa fa-comments-o"></i> </button>
						  <button type="button" class="btn btn-primary btn-xs">
							<i class="fa fa-user"> </i> View Profile
						  </button>
						</div>
					  </div>
					</div>
				  </div>

				  <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
					<div class="well profile_view">
					  <div class="col-sm-12">
						<h4 class="brief"><i>Digital Strategist</i></h4>
						<div class="left col-xs-7">
						  <h2>Nicole Pearson</h2>
						  <p><strong>About: </strong> Web Designer / UI. </p>
						  <ul class="list-unstyled">
							<li><i class="fa fa-building"></i> Address: </li>
							<li><i class="fa fa-phone"></i> Phone #: </li>
						  </ul>
						</div>
						<div class="right col-xs-5 text-center">
						  <img src="/public/assets/images/user.png" alt="" class="img-circle img-responsive">
						</div>
					  </div>
					  <div class="col-xs-12 bottom text-center">
						<div class="col-xs-12 col-sm-6 emphasis">
						  <p class="ratings">
							<a>4.0</a>
							<a href="#"><span class="fa fa-star"></span></a>
							<a href="#"><span class="fa fa-star"></span></a>
							<a href="#"><span class="fa fa-star"></span></a>
							<a href="#"><span class="fa fa-star"></span></a>
							<a href="#"><span class="fa fa-star-o"></span></a>
						  </p>
						</div>
						<div class="col-xs-12 col-sm-6 emphasis">
						  <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
							</i> <i class="fa fa-comments-o"></i> </button>
						  <button type="button" class="btn btn-primary btn-xs">
							<i class="fa fa-user"> </i> View Profile
						  </button>
						</div>
					  </div>
					</div>
				  </div>

				  <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
					<div class="well profile_view">
					  <div class="col-sm-12">
						<h4 class="brief"><i>Digital Strategist</i></h4>
						<div class="left col-xs-7">
						  <h2>Nicole Pearson</h2>
						  <p><strong>About: </strong> Web Designer / UI. </p>
						  <ul class="list-unstyled">
							<li><i class="fa fa-building"></i> Address: </li>
							<li><i class="fa fa-phone"></i> Phone #: </li>
						  </ul>
						</div>
						<div class="right col-xs-5 text-center">
						  <img src="/public/assets/images/user.png" alt="" class="img-circle img-responsive">
						</div>
					  </div>
					  <div class="col-xs-12 bottom text-center">
						<div class="col-xs-12 col-sm-6 emphasis">
						  <p class="ratings">
							<a>4.0</a>
							<a href="#"><span class="fa fa-star"></span></a>
							<a href="#"><span class="fa fa-star"></span></a>
							<a href="#"><span class="fa fa-star"></span></a>
							<a href="#"><span class="fa fa-star"></span></a>
							<a href="#"><span class="fa fa-star-o"></span></a>
						  </p>
						</div>
						<div class="col-xs-12 col-sm-6 emphasis">
						  <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
							</i> <i class="fa fa-comments-o"></i> </button>
						  <button type="button" class="btn btn-primary btn-xs">
							<i class="fa fa-user"> </i> View Profile
						  </button>
						</div>
					  </div>
					</div>
				  </div>

				  <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
					<div class="well profile_view">
					  <div class="col-sm-12">
						<h4 class="brief"><i>Digital Strategist</i></h4>
						<div class="left col-xs-7">
						  <h2>Nicole Pearson</h2>
						  <p><strong>About: </strong> Web Designer / UI. </p>
						  <ul class="list-unstyled">
							<li><i class="fa fa-building"></i> Address: </li>
							<li><i class="fa fa-phone"></i> Phone #: </li>
						  </ul>
						</div>
						<div class="right col-xs-5 text-center">
						  <img src="/public/assets/images/user.png" alt="" class="img-circle img-responsive">
						</div>
					  </div>
					  <div class="col-xs-12 bottom text-center">
						<div class="col-xs-12 col-sm-6 emphasis">
						  <p class="ratings">
							<a>4.0</a>
							<a href="#"><span class="fa fa-star"></span></a>
							<a href="#"><span class="fa fa-star"></span></a>
							<a href="#"><span class="fa fa-star"></span></a>
							<a href="#"><span class="fa fa-star"></span></a>
							<a href="#"><span class="fa fa-star-o"></span></a>
						  </p>
						</div>
						<div class="col-xs-12 col-sm-6 emphasis">
						  <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
							</i> <i class="fa fa-comments-o"></i> </button>
						  <button type="button" class="btn btn-primary btn-xs">
							<i class="fa fa-user"> </i> View Profile
						  </button>
						</div>
					  </div>
					</div>
				  </div>
				  
				  <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
					<div class="well profile_view">
					  <div class="col-sm-12">
						<h4 class="brief"><i>Digital Strategist</i></h4>
						<div class="left col-xs-7">
						  <h2>Nicole Pearson</h2>
						  <p><strong>About: </strong> Web Designer / UX / Graphic Artist / Coffee Lover </p>
						  <ul class="list-unstyled">
							<li><i class="fa fa-building"></i> Address: </li>
							<li><i class="fa fa-phone"></i> Phone #: </li>
						  </ul>
						</div>
						<div class="right col-xs-5 text-center">
						  <img src="/public/assets/images/img.jpg" alt="" class="img-circle img-responsive">
						</div>
					  </div>
					  <div class="col-xs-12 bottom text-center">
						<div class="col-xs-12 col-sm-6 emphasis">
						  <p class="ratings">
							<a>4.0</a>
							<a href="#"><span class="fa fa-star"></span></a>
							<a href="#"><span class="fa fa-star"></span></a>
							<a href="#"><span class="fa fa-star"></span></a>
							<a href="#"><span class="fa fa-star"></span></a>
							<a href="#"><span class="fa fa-star-o"></span></a>
						  </p>
						</div>
						<div class="col-xs-12 col-sm-6 emphasis">
						  <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
							</i> <i class="fa fa-comments-o"></i> </button>
						  <button type="button" class="btn btn-primary btn-xs">
							<i class="fa fa-user"> </i> View Profile
						  </button>
						</div>
					  </div>
					</div>
				  </div>

				  <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
					<div class="well profile_view">
					  <div class="col-sm-12">
						<h4 class="brief"><i>Digital Strategist</i></h4>
						<div class="left col-xs-7">
						  <h2>Nicole Pearson</h2>
						  <p><strong>About: </strong> Web Designer / UI. </p>
						  <ul class="list-unstyled">
							<li><i class="fa fa-building"></i> Address: </li>
							<li><i class="fa fa-phone"></i> Phone #: </li>
						  </ul>
						</div>
						<div class="right col-xs-5 text-center">
						  <img src="/public/assets/images/user.png" alt="" class="img-circle img-responsive">
						</div>
					  </div>
					  <div class="col-xs-12 bottom text-center">
						<div class="col-xs-12 col-sm-6 emphasis">
						  <p class="ratings">
							<a>4.0</a>
							<a href="#"><span class="fa fa-star"></span></a>
							<a href="#"><span class="fa fa-star"></span></a>
							<a href="#"><span class="fa fa-star"></span></a>
							<a href="#"><span class="fa fa-star"></span></a>
							<a href="#"><span class="fa fa-star-o"></span></a>
						  </p>
						</div>
						<div class="col-xs-12 col-sm-6 emphasis">
						  <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
							</i> <i class="fa fa-comments-o"></i> </button>
						  <button type="button" class="btn btn-primary btn-xs">
							<i class="fa fa-user"> </i> View Profile
						  </button>
						</div>
					  </div>
					</div>
				  </div>

				  <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
					<div class="well profile_view">
					  <div class="col-sm-12">
						<h4 class="brief"><i>Digital Strategist</i></h4>
						<div class="left col-xs-7">
						  <h2>Nicole Pearson</h2>
						  <p><strong>About: </strong> Web Designer / UI. </p>
						  <ul class="list-unstyled">
							<li><i class="fa fa-building"></i> Address: </li>
							<li><i class="fa fa-phone"></i> Phone #: </li>
						  </ul>
						</div>
						<div class="right col-xs-5 text-center">
						  <img src="/public/assets/images/user.png" alt="" class="img-circle img-responsive">
						</div>
					  </div>
					  <div class="col-xs-12 bottom text-center">
						<div class="col-xs-12 col-sm-6 emphasis">
						  <p class="ratings">
							<a>4.0</a>
							<a href="#"><span class="fa fa-star"></span></a>
							<a href="#"><span class="fa fa-star"></span></a>
							<a href="#"><span class="fa fa-star"></span></a>
							<a href="#"><span class="fa fa-star"></span></a>
							<a href="#"><span class="fa fa-star-o"></span></a>
						  </p>
						</div>
						<div class="col-xs-12 col-sm-6 emphasis">
						  <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
							</i> <i class="fa fa-comments-o"></i> </button>
						  <button type="button" class="btn btn-primary btn-xs">
							<i class="fa fa-user"> </i> View Profile
						  </button>
						</div>
					  </div>
					</div>
				  </div>

				  <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
					<div class="well profile_view">
					  <div class="col-sm-12">
						<h4 class="brief"><i>Digital Strategist</i></h4>
						<div class="left col-xs-7">
						  <h2>Nicole Pearson</h2>
						  <p><strong>About: </strong> Web Designer / UI. </p>
						  <ul class="list-unstyled">
							<li><i class="fa fa-building"></i> Address: </li>
							<li><i class="fa fa-phone"></i> Phone #: </li>
						  </ul>
						</div>
						<div class="right col-xs-5 text-center">
						  <img src="/public/assets/images/user.png" alt="" class="img-circle img-responsive">
						</div>
					  </div>
					  <div class="col-xs-12 bottom text-center">
						<div class="col-xs-12 col-sm-6 emphasis">
						  <p class="ratings">
							<a>4.0</a>
							<a href="#"><span class="fa fa-star"></span></a>
							<a href="#"><span class="fa fa-star"></span></a>
							<a href="#"><span class="fa fa-star"></span></a>
							<a href="#"><span class="fa fa-star"></span></a>
							<a href="#"><span class="fa fa-star-o"></span></a>
						  </p>
						</div>
						<div class="col-xs-12 col-sm-6 emphasis">
						  <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
							</i> <i class="fa fa-comments-o"></i> </button>
						  <button type="button" class="btn btn-primary btn-xs">
							<i class="fa fa-user"> </i> View Profile
						  </button>
						</div>
					  </div>
					</div>
				  </div>

				  <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
					<div class="well profile_view">
					  <div class="col-sm-12">
						<h4 class="brief"><i>Digital Strategist</i></h4>
						<div class="left col-xs-7">
						  <h2>Nicole Pearson</h2>
						  <p><strong>About: </strong> Web Designer / UI. </p>
						  <ul class="list-unstyled">
							<li><i class="fa fa-building"></i> Address: </li>
							<li><i class="fa fa-phone"></i> Phone #: </li>
						  </ul>
						</div>
						<div class="right col-xs-5 text-center">
						  <img src="/public/assets/images/user.png" alt="" class="img-circle img-responsive">
						</div>
					  </div>
					  <div class="col-xs-12 bottom text-center">
						<div class="col-xs-12 col-sm-6 emphasis">
						  <p class="ratings">
							<a>4.0</a>
							<a href="#"><span class="fa fa-star"></span></a>
							<a href="#"><span class="fa fa-star"></span></a>
							<a href="#"><span class="fa fa-star"></span></a>
							<a href="#"><span class="fa fa-star"></span></a>
							<a href="#"><span class="fa fa-star-o"></span></a>
						  </p>
						</div>
						<div class="col-xs-12 col-sm-6 emphasis">
						  <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
							</i> <i class="fa fa-comments-o"></i> </button>
						  <button type="button" class="btn btn-primary btn-xs">
							<i class="fa fa-user"> </i> View Profile
						  </button>
						</div>
					  </div>
					</div>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
	  </div>
</template>


<script>

var Home = Vue.extend({
	template: '#home',
	data(){
		return {
			records: [],
		};
	},
	mounted: function () {
		var self = this;
		self.load();
	},
	computed: {
	},
	methods: {
		load(){
			var self = this;
			
			MV.api.readList('/accounts_users', {
				filter: [
					'user,eq,<?= $this->user->id; ?>'
				],
				join: [
					'accounts,identifications_types',
					'accounts,accounts_types',
					'accounts,addresses',
					'accounts,economic_activities',
					'accounts,users',
					'accounts,identifications_types',
				]
			}, function(a){
				console.log('a',a);
				records.forEach((b) => {
					self.records.push(b.account);
				});
			});
			/*
			api.get(', {
				params: {
					join: [
						'identifications_types',
						'geo_departments',
						'geo_citys',
						'pictures',
						// 'permissions',
					]
				}
			}).then(function (response) {
				if(response.status == 200){
					self.loading = false;
					self.profile = response.data;
					console.log('profile', self.profile);
				}
			}).catch(function (error) {
				console.log('error Home::methods::load()');
				console.log(error.response);
				self.loading = false;
			});*/
		},
	}
});

var router = new VueRouter({
	linkActiveClass: 'active',
	routes:[
		{ path: '/', component: Home, name: 'Home' }
	]
});

app = new Vue({
	router: router,
	mounted(){
		var self = this;
	},
	data: function () {
		return {
		};
	},
	methods: {
	}
}).$mount('#me-accounts');
</script>