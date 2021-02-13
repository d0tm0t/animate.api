<div class="form-group row align-items-center"
 :class="{'has-danger': errors.has('url'), 'has-success': fields.url && fields.url.valid }">
 <label for="url" class="col-form-label text-md-right"
  :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.page.columns.url') }}</label>
 <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
  <input type="text" v-model="form.url" v-validate="'required'" @input="validate($event)" class="form-control"
   :class="{'form-control-danger': errors.has('url'), 'form-control-success': fields.url && fields.url.valid}" id="url"
   name="url" placeholder="{{ trans('admin.page.columns.url') }}">
  <div v-if="errors.has('url')" class="form-control-feedback form-text" v-cloak>@{{ errors . first('url') }}</div>
 </div>
</div>

<div class="form-check row"
 :class="{'has-danger': errors.has('enabled'), 'has-success': fields.enabled && fields.enabled.valid }">
 <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
  <input class="form-check-input" id="enabled" type="checkbox" v-model="form.enabled" v-validate="''"
   data-vv-name="enabled" name="enabled_fake_element">
  <label class="form-check-label" for="enabled">
   {{ trans('admin.page.columns.enabled') }}
  </label>
  <input type="hidden" name="enabled" :value="form.enabled">
  <div v-if="errors.has('enabled')" class="form-control-feedback form-text" v-cloak>@{{ errors . first('enabled') }}
  </div>
 </div>
</div>
