import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { RegComponent } from './Components/reg/reg.component';
import { ErrorComponent } from './error/error.component';
import { ProfileComponent } from './profile/profile.component';
import { UserComponent } from './user/user.component';

const routes: Routes = [
                        {path : 'home', component:RegComponent},
                        {path : 'user/:id', component:UserComponent},
                        {path : 'profile', component:ProfileComponent},
                        {path : '**', component:ErrorComponent},



];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
