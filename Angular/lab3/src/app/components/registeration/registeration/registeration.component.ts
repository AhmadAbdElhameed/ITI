import { Component, OnInit, EventEmitter, Output  } from '@angular/core';

@Component({
  selector: 'app-registeration',
  templateUrl: './registeration.component.html',
  styleUrls: ['./registeration.component.css']
})
export class RegisterationComponent implements OnInit {

  studentName="";
  studentAge=0;
  AllStudents:{name:string, age:number}[]=[];

  constructor() {
    setTimeout(() =>{
      this.registrationEvent.emit(this.AllStudents);
    },2000)
  }

  ngOnInit(): void {
  }
  AddStudent(){
    let NewStudent:{name:string , age:number} = {name: this.studentName , age: this.studentAge}
    this.AllStudents.push(NewStudent);

  }

  @Output() registrationEvent = new EventEmitter;


}
