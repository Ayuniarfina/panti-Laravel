@extends('front.template')

@section('main')

<div class="row ">
          <div class="col-lg-6 col-centered">
            <div class="well bs-component">
        <form name="form" class="form-horizontal"(ngSubmit)="f.form.valid && login()" #f="ngForm" novalidate>
          <fieldset>
            <legend>Login</legend>
            <div class="form-group" [ngClass]="{'has-error': f.submitted && !username.valid}">
              <label for="username" class="col-lg-2 control-label">Username</label>
              <div class="col-lg-10">
                <input class="form-control" name="username" type="text" required>
              </div>
              <div *ngIf="f.submitted && !username.valid" class="help-block">Username is required           
              </div>
            </div>
            <div class="form-group" [ngClass]="{ 'has-error': f.submitted && !password.valid }">
              <label for="password" class="col-lg-2 control-label">Password</label>
              <div class="col-lg-10">
                <input class="form-control" name="password" type="password" required>
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Checkbox
                  </label>
                </div>
              </div>
            </div>
            
            <div class="form-group">
            <button [disabled]="loading" class="btn btn-primary">Login</button>
            <img *ngIf="loading" src="data:image/gif;base64,R0lGODlhEAAQAPIAAP///wAAAMLCwkJCQgAAAGJiYoKCgpKSkiH/C05FVFNDQVBFMi4wAwEAAAAh/hpDcmVhdGVkIHdpdGggYWpheGxvYWQuaW5mbwAh+QQJCgAAACwAAAAAEAAQAAADMwi63P4wyklrE2MIOggZnAdOmGYJRbExwroUmcG2LmDEwnHQLVsYOd2mBzkYDAdKa+dIAAAh+QQJCgAAACwAAAAAEAAQAAADNAi63P5OjCEgG4QMu7DmikRxQlFUYDEZIGBMRVsaqHwctXXf7WEYB4Ag1xjihkMZsiUkKhIAIfkECQoAAAAsAAAAABAAEAAAAzYIujIjK8pByJDMlFYvBoVjHA70GU7xSUJhmKtwHPAKzLO9HMaoKwJZ7Rf8AYPDDzKpZBqfvwQAIfkECQoAAAAsAAAAABAAEAAAAzMIumIlK8oyhpHsnFZfhYumCYUhDAQxRIdhHBGqRoKw0R8DYlJd8z0fMDgsGo/IpHI5TAAAIfkECQoAAAAsAAAAABAAEAAAAzIIunInK0rnZBTwGPNMgQwmdsNgXGJUlIWEuR5oWUIpz8pAEAMe6TwfwyYsGo/IpFKSAAAh+QQJCgAAACwAAAAAEAAQAAADMwi6IMKQORfjdOe82p4wGccc4CEuQradylesojEMBgsUc2G7sDX3lQGBMLAJibufbSlKAAAh+QQJCgAAACwAAAAAEAAQAAADMgi63P7wCRHZnFVdmgHu2nFwlWCI3WGc3TSWhUFGxTAUkGCbtgENBMJAEJsxgMLWzpEAACH5BAkKAAAALAAAAAAQABAAAAMyCLrc/jDKSatlQtScKdceCAjDII7HcQ4EMTCpyrCuUBjCYRgHVtqlAiB1YhiCnlsRkAAAOwAAAAAAAAAAAA==" />
            <a [routerLink]="['/register']" class="btn btn-link">Register</a>
        </div>
          </fieldset>
        </form>
      </div>
    </div>
</div>
@endsection

