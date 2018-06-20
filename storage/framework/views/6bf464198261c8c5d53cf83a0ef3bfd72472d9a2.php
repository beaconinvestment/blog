<?php $__env->startSection('title'); ?>
    User Account
    ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>


<?php $__env->startSection('header_styles'); ?>

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendors/iCheck/css/minimal/blue.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendors/select2/css/select2.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendors/select2/css/select2-bootstrap.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendors/datetimepicker/css/bootstrap-datetimepicker.min.css')); ?>">

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/frontend/user_account.css')); ?>">

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <hr class="content-header-sep">
    <div class="container">
        <div class="welcome">
            <h3>My Account</h3>
        </div>
        <hr>
        <div class="row margin_right_left">
            <div class="row margin_right_left">
                <div class="col-md-12">
                    <!--main content-->
                    <div class="position-center">
                        <!-- Notifications -->
                        <div id="notific">
                        <?php echo $__env->make('notifications', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        </div>

                        <div>
                            <h3 class="text-primary" id="title">Personal Information </h3>
                        </div>
                        <?php echo Form::model($user, ['url' => URL::to('my-account'), 'method' => 'put', 'class' => 'form-horizontal','enctype'=>"multipart/form-data"]); ?>


                        <?php echo e(csrf_field()); ?>

                            <div class="form-group <?php echo e($errors->first('pic', 'has-error')); ?>">
                                <label class="col-md-2 control-label">Avatar:</label>
                                <div class="col-md-10">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail" style="max-width: 200px; max-height: 200px;">
                                            <?php if($user->pic): ?>
                                                <?php if((substr($user->pic, 0,5)) == 'https'): ?>
                                                    <img src="<?php echo e($user->pic); ?>" alt="img"
                                                         class="img-responsive"/>
                                                <?php else: ?>
                                                    <img src="<?php echo url('/').'/uploads/users/'.$user->pic; ?>" alt="img"
                                                         class="img-responsive"/>
                                                <?php endif; ?>
                                            <?php elseif($user->gender === "male"): ?>
                                                <img src="<?php echo e(asset('assets/images/authors/avatar3.png')); ?>" alt="..."
                                                     class="img-responsive"/>
                                            <?php elseif($user->gender === "female"): ?>
                                                <img src="<?php echo e(asset('assets/images/authors/avatar5.png')); ?>" alt="..."
                                                     class="img-responsive"/>
                                            <?php else: ?>
                                                <img src="<?php echo e(asset('assets/images/authors/no_avatar.jpg')); ?>" alt="..."
                                                     class="img-responsive"/>
                                            <?php endif; ?>
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                        <div>
                                            <span class="btn btn-primary btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="pic" id="pic" />
                                            </span>
                                            <span class="btn btn-primary fileinput-exists" data-dismiss="fileinput">Remove</span>
                                        </div>
                                    </div>
                                    <span class="help-block"><?php echo e($errors->first('pic', ':message')); ?></span>
                                </div>
                            </div>
                            <div class="form-group <?php echo e($errors->first('first_name', 'has-error')); ?>">
                                <label class="col-lg-2 control-label">
                                    First Name:
                                    <span class='require'>*</span>
                                </label>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                    <span class="input-group-addon">
                        <i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#418bca" data-hc="#418bca"></i>
                                    </span>
                                        <input type="text" placeholder=" " name="first_name" id="uf-name"
                                               class="form-control" value="<?php echo old('first_name',$user->first_name); ?>">
                                    </div>
                                    <span class="help-block"><?php echo e($errors->first('first_name', ':message')); ?></span>
                                </div>

                            </div>

                            <div class="form-group <?php echo e($errors->first('last_name', 'has-error')); ?>">
                                <label class="col-lg-2 control-label">
                                    Last Name:
                                    <span class='require'>*</span>
                                </label>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                            <span class="input-group-addon">
                        <i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#418bca" data-hc="#418bca"></i>
                                            </span>
                                        <input type="text" placeholder=" " name="last_name" id="ul-name"
                                               class="form-control"
                                               value="<?php echo old('last_name',$user->last_name); ?>"></div>
                                    <span class="help-block"><?php echo e($errors->first('last_name', ':message')); ?></span>
                                </div>
                            </div>

                            <div class="form-group <?php echo e($errors->first('email', 'has-error')); ?>">
                                <label class="col-lg-2 control-label">
                                    Email:
                                    <span class='require'>*</span>
                                </label>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                                                <span class="input-group-addon">
                        <i class="livicon" data-name="mail" data-size="16" data-loop="true" data-c="#418bca" data-hc="#418bca"></i>
                                                                </span>
                                        <input type="text" placeholder=" " id="email" name="email" class="form-control"
                                               value="<?php echo old('email',$user->email); ?>"></div>
                                    <span class="help-block"><?php echo e($errors->first('email', ':message')); ?></span>
                                </div>

                            </div>

                            <div class="form-group <?php echo e($errors->first('password', 'has-error')); ?>">
                                <p class="text-warning col-md-offset-2"><strong>If you don't want to change password... please leave them empty</strong></p>
                                <label class="col-lg-2 control-label">
                                    Password:
                                    <span class='require'>*</span>
                                </label>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                            <span class="input-group-addon">
                        <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#418bca" data-hc="#418bca"></i>
                                            </span>
                                        <input type="password" name="password" placeholder=" " id="pwd" class="form-control"></div>
                                    <span class="help-block"><?php echo e($errors->first('password', ':message')); ?></span>
                                </div>
                            </div>

                            <div class="form-group <?php echo e($errors->first('password_confirm', 'has-error')); ?>">
                                <label class="col-lg-2 control-label">
                                    Confirm Password:
                                    <span class='require'>*</span>
                                </label>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                            <span class="input-group-addon">
                        <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#418bca" data-hc="#418bca"></i>
                                            </span>
                                        <input type="password" name="password_confirm" placeholder=" " id="cpwd" class="form-control"></div>
                                    <span class="help-block"><?php echo e($errors->first('password_confirm', ':message')); ?></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-2 control-label">Gender: </label>
                                <div class="col-lg-6">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="gender" value="male" <?php if($user->gender === "male"): ?> checked="checked" <?php endif; ?> />
                                            Male
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="gender" value="female" <?php if($user->gender === "female"): ?> checked="checked" <?php endif; ?> />
                                            Female
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="gender" value="other" <?php if($user->gender === "other"): ?> checked="checked" <?php endif; ?> />
                                            Other
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group  <?php echo e($errors->first('bio', 'has-error')); ?>">
                                <label for="" class="col-lg-2 control-label">Bio <small>(brief intro):</small></label>
                                <div class="col-lg-6">
                                            <textarea name="bio" id="bio" class="form-control resize_vertical"
                                                      rows="4"><?php echo old('bio', $user->bio); ?></textarea>
                                </div>
                                <?php echo $errors->first('bio', '<span class="help-block">:message</span>'); ?>

                            </div>

                            <div>
                                <h3 class="text-primary" id="title">Contact: </h3>
                            </div>

                            <div class="form-group <?php echo e($errors->first('address', 'has-error')); ?>">
                                <label class="col-lg-2 control-label">
                                    Address:
                                </label>
                                <div class="col-lg-6">
                                            <textarea rows="5" cols="30" class="form-control resize_vertical" id="add1"
                                                      name="address"><?php echo old('address',$user->address); ?></textarea>
                                </div>
                                <span class="help-block"><?php echo e($errors->first('address', ':message')); ?></span>
                            </div>

                            <div class="form-group <?php echo e($errors->first('country', 'has-error')); ?>">
                                <label class="control-label  col-lg-2">Select Country: </label>
                                <div class="col-lg-6">
                                    <?php echo Form::select('country', $countries, $user->country,['class' => 'form-control select2', 'id' => 'countries']); ?>

                                    <span class="help-block"><?php echo e($errors->first('country', ':message')); ?></span>
                                </div>
                            </div>

                        <div class="form-group <?php echo e($errors->first('user_state', 'has-error')); ?>">
                            <label class="col-lg-2 control-label" for="user_state">State:</label>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                                        <span class="input-group-addon">
                        <i class="livicon" data-name="plus-alt" data-size="16" data-loop="true" data-c="#418bca" data-hc="#418bca"></i>
                                                        </span>
                                        <input type="text" placeholder=" " id="user_state" class="form-control"
                                               name="user_state"
                                               value="<?php echo ($user->user_state); ?>"/>
                                    </div>
                                </div>
                            <span class="help-block"><?php echo e($errors->first('user_state', ':message')); ?></span>

                            </div>

                            <div class="form-group <?php echo e($errors->first('city', 'has-error')); ?>">
                                <label class="col-lg-2 control-label" for="city">City:</label>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                                        <span class="input-group-addon">
                        <i class="livicon" data-name="plus-alt" data-size="16" data-loop="true" data-c="#418bca" data-hc="#418bca"></i>
                                                        </span>
                                        <input type="text" placeholder=" " id="city" class="form-control" name="city"
                                               value="<?php echo old('city',$user->city); ?>"/>
                                    </div>
                                </div>
                                <span class="help-block"><?php echo e($errors->first('city', ':message')); ?></span>
                            </div>

                            <div class="form-group <?php echo e($errors->first('postal', 'has-error')); ?>">
                                <label class="col-lg-2 control-label" for="postal">Postal:</label>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                                        <span class="input-group-addon">
                        <i class="livicon" data-name="plus-alt" data-size="16" data-loop="true" data-c="#418bca" data-hc="#418bca"></i>
                                                        </span>
                                        <input type="text" placeholder=" " id="postal" class="form-control"
                                               name="postal" value="<?php echo old('postal',$user->postal); ?>"/>
                                    </div>
                                    <span class="help-block"><?php echo e($errors->first('postal', ':message')); ?></span>
                                </div>
                            </div>

                            <div class="form-group <?php echo e($errors->first('dob', 'has-error')); ?>">
                                <label class="col-lg-2 control-label">
                                    DOB:
                                </label>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                            <span class="input-group-addon">
                        <i class="livicon" data-name="calendar" data-size="16" data-loop="true" data-c="#418bca" data-hc="#418bca"></i>
                                            </span>


                                            <?php if($user->dob === ''): ?>
                                                <?php echo Form::text('dob', null, array('id' => 'datepicker','class' => 'form-control')); ?>

                                        <?php else: ?>
                                                 <?php echo Form::text('dob', old('dob',$user->dob), array('id' => 'datepicker','class' => 'form-control', 'data-date-format'=> 'YYYY-MM-DD')); ?>

                                        <?php endif; ?>
                                    </div>
                                    <span class="help-block"><?php echo e($errors->first('dob', ':message')); ?></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer_scripts'); ?>

    <script type="text/javascript" src="<?php echo e(asset('assets/vendors/moment/js/moment.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('assets/vendors/iCheck/js/icheck.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('assets/vendors/select2/js/select2.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('assets/vendors/datetimepicker/js/bootstrap-datetimepicker.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('assets/js/frontend/user_account.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>