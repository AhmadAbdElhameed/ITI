import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { BrowserModule } from '@angular/platform-browser';

import { AppComponent } from './app.component';
import { ParentComponent } from './components/parent/parent/parent.component';
import { RegisterationComponent } from './components/registeration/registeration/registeration.component';
import { StudentsComponent } from './components/students/students/students.component';

@NgModule({
  declarations: [
    AppComponent,
    ParentComponent,
    RegisterationComponent,
    StudentsComponent
  ],
  imports: [
    BrowserModule,
    FormsModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
