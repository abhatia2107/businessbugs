@section("listing")
	          <div class="row">
	            <div class="col-lg-3 col-md-6">
	                <div class="panel panel-primary">
	                    <div class="panel-heading">
	                        <div class="row">
	                            <div class="col-xs-3">
	                                <i class="fa fa-comments fa-5x"></i>
	                            </div>
	                            <div class="col-xs-9 text-right">
	                                <div class="huge">{{$count['users']}}</div>
	                                <div>User Registrations</div>
	                            </div>
	                        </div>
	                    </div>
	                    <a href="/users/history">
	                        <div class="panel-footer">
	                            <span class="pull-left">View Details</span>
	                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
	                            <div class="clearfix"></div>
	                        </div>
	                    </a>
	                </div>
	            </div>
	            <div class="col-lg-3 col-md-6">
	                <div class="panel panel-green">
	                    <div class="panel-heading">
	                        <div class="row">
	                            <div class="col-xs-3">
	                                <i class="fa fa-tasks fa-5x"></i>
	                            </div>
	                            <div class="col-xs-9 text-right">
	                                <div class="huge">{{$count['batches']}}</div>
	                                <div>Batch Registrations</div>
	                            </div>
	                        </div>
	                    </div>
	                    <a href="/batches/history">
	                        <div class="panel-footer">
	                            <span class="pull-left">View Details</span>
	                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
	                            <div class="clearfix"></div>
	                        </div>
	                    </a>
	                </div>
	            </div>
	            <div class="col-lg-3 col-md-6">
	                <div class="panel panel-yellow">
	                    <div class="panel-heading">
	                        <div class="row">
	                            <div class="col-xs-3">
	                                <i class="fa fa-shopping-cart fa-5x"></i>
	                            </div>
	                            <div class="col-xs-9 text-right">
	                                <div class="huge">{{$count['institutes']}}</div>
	                                <div>Institute registrations</div>
	                            </div>
	                        </div>
	                    </div>
	                    <a href="/institutes/history">
	                        <div class="panel-footer">
	                            <span class="pull-left">View Details</span>
	                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
	                            <div class="clearfix"></div>
	                        </div>
	                    </a>
	                </div>
	            </div>
	            <div class="col-lg-3 col-md-6">
	                <div class="panel panel-red">
	                    <div class="panel-heading">
	                        <div class="row">
	                            <div class="col-xs-3">
	                                <i class="fa fa-support fa-5x"></i>
	                            </div>
	                            <div class="col-xs-9 text-right">
	                                <div class="huge">{{$count['approvals']}}</div>
	                                <div>Pending Approvals</div>
	                            </div>
	                        </div>
	                    </div>
	                    <a href="/batches/approve/history">
	                        <div class="panel-footer">
	                            <span class="pull-left">View Details</span>
	                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
	                            <div class="clearfix"></div>
	                        </div>
	                    </a>
	                </div>
	            </div>
	          </div>
@show