import { Inject,ScheduleComponent,Day,Week,WorkWeek,Month,Agenda} from '@syncfusion/ej2-react-schedule';
import React from 'react';
import './App.css';



function App() {
 
  return (
    <ScheduleComponent currentView='Month'>
     <Inject services={[Day,Week,WorkWeek,Month,Agenda]}/>
    </ScheduleComponent>
  );
}

export default App;
