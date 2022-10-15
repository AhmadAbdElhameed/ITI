import { Component, OnInit ,Input} from '@angular/core';

@Component({
  selector: 'app-students',
  templateUrl: './students.component.html',
  styleUrls: ['./students.component.css']
})
export class StudentsComponent implements OnInit {
  @Input() DataFromParent:any;

  constructor() { }

  ngOnInit(): void {
  }

}
