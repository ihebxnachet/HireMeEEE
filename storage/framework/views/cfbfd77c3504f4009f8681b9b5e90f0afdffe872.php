
<?php $__env->startSection('content'); ?>
    <div class="skills-listing" id="skill-list">
        <?php if(Session::has('message')): ?>
            <div class="flash_msg">
                <flash_messages :message_class="'success'" :time ='5' :message="'<?php echo e(Session::get('message')); ?>'" v-cloak></flash_messages>
            </div>
        <?php endif; ?>
        <section class="wt-haslayout wt-dbsectionspace">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-6 float-left">
                    <div class="wt-dashboardbox">
                        <div class="wt-dashboardboxtitle">
                            <h2><?php echo e(trans('lang.edit_skill')); ?></h2>
                        </div>
                        <div class="wt-dashboardboxcontent">
                            <?php echo Form::open(['url' => url('admin/skills/update-skills/'.$skills->id.''), 
                                'class' =>'wt-formtheme wt-formprojectinfo wt-formcategory', 'id' => 'skills'] ); ?>

                            <fieldset>
                                <div class="form-group">
                                    <?php echo Form::text( 'skill_title', e($skills['title']), ['class' =>'form-control'.($errors->has('skill_title') ? ' is-invalid' : '')] ); ?>

                                    <span class="form-group-description"><?php echo e(trans('lang.desc')); ?></span>
                                    <?php if($errors->has('skill_title')): ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($errors->first('skill_title')); ?></strong>
                                        </span>
                                    <?php endif; ?>     
                                </div>
                                <div class="form-group">
                                    <?php echo Form::textarea( 'skill_desc', e($skills['description']), ['class' =>'form-control',
                                    'placeholder' => trans('lang.ph_desc')] ); ?>

                                    <span class="form-group-description"><?php echo e(trans('lang.cat_desc')); ?></span>
                                </div>
                                <div class="form-group wt-btnarea">
                                    <?php echo Form::submit(trans('lang.update_skill'), ['class' => 'wt-btn']); ?>

                                </div>
                            </fieldset>
                            <?php echo Form::close();; ?>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('back-end.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>