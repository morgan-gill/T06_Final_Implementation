<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <h1>New proposal</h1>
  <h2>Project Owner: </h2><p>{{ Session::get('projectOwner')}}</p>
  <h2>Project Name: </h2><p>{{ Session::get('projectName')}}</p>
    <h2>Phone: </h2><p>{{ Session::get('phone')}}</p>
    <h2>Email: </h2><p>{{ Session::get('email')}}</p>
    <h1>Project Site Information</h1>
    <h2>Address Line: </h2><p>{{ Session::get('projectAddress')}}</p>
    <h2>Builder: </h2><p>{{ Session::get('builder')}}</p>
    <h2>Design Company: </h2><p>In Tech House Design Corporation</p>
    <h2>Architectural Style: </h2><p>{{ Session::get('archStyle')}}</p>
    <h2>General Contractor: </h2><p>{{ Session::get('genContractor')}}</p>
    <h2>Design Stages: </h2><p>{{ Session::get('designStages')}}</p>
    <h2>Requirements for variant development: </h2><p>{{ Session::get('revisions')}} revisions</p>
    <h2>Data of special construction conditions: </h2><p>{{ Session::get('specialConditions')}}</p>
    <h2>General information about the site (location, borders, area): </h2><p>{{ Session::get('generalInfo')}}</p>
    <h2>GFA: </h2><p>{{ Session::get('GFA')}}</p>
    <h2>Building Area: </h2><p>{{ Session::get('buildingArea')}}</p>
    <h2>Number of Floors: </h2><p>{{ Session::get('numOfFloors')}}</p>
    <h2>Heights: </h2><p>{{ Session::get('heights')}}</p>
    <h2>Staircase: </h2><p>{{ Session::get('staircase')}}</p>
    <h2>Initial permissive documentation: </h2><p>{{ Session::get('permissiveDocs')}}</p>
    <h2>Garage: </h2><p>{{ Session::get('garage')}}</p>
    <h2>Quantity of Parking: </h2><p>{{ Session::get('parking')}}</p>
    <h2>Garage materials: </h2><p>{{ Session::get('garageMaterials')}}</p>
    <h2>Security: </h2><p>{{ Session::get('security')}}</p>
    <br>
    <h1>Extra pics of the home you like with comments:</h1>
    {!! Session::get('projectDimensions') !!}
    <h3>Architectural and planning:</h3>
    <h2>Facades:</h2>
    <h2>Front Facade: </h2><p>{{ Session::get('frontFacade')}}</p>
    <h2>Rear Facade: </h2><p>{{ Session::get('rearFacade')}}</p>
    <h2>Sides Facade: </h2><p>{{ Session::get('sidesFacade')}}</p>
    <h2>Windows:</h2>
    <h2>Frame: </h2><p>{{ Session::get('windowsFrame')}}</p>
    <h2>Colour: </h2><p>{{ Session::get('windowsColour')}}</p>
    <h2>Glazing: </h2><p>{{ Session::get('windowsGlazing')}}</p>
    <h2>Doors: </h2>
    <h2>Entrance Material: </h2><p>{{ Session::get('sidesFacade')}}</p>
    <h2>Walls Material: </h2><p>{{ Session::get('wallsMaterial')}}</p>
    <h2>Deck: </h2><p>{{ Session::get('deckMaterial')}}</p>
    <h3>Structural concepts and materials
                            load bearing bearing and enclosing
                            structures (floors, stairs, lift shafts, partitions, roof).:</h3>
    <h2>Deck: </h2><p>{{ Session::get('deckMaterial')}}</p>
    <h2>Foundations</h2>
    <h2>Footing: </h2><p>{{ Session::get('footing')}}</p>
    <h2>Wall: </h2><p>{{ Session::get('')}}</p>
    <h2>Exterios wall of the basement: </h2><p>{{ Session::get('')}}</p>
    <h2>Supporting structures: </h2><p>{{ Session::get('supportingStructures')}}</p>
    <h2>Walls Material: </h2><p>{{ Session::get('wallsMaterial')}}</p>
    <h2>Floor Material: </h2><p>{{ Session::get('floorsMaterial')}}</p>
    <h2>Stairs Material: </h2><p>{{ Session::get('stairssMaterial')}}</p>
    <h2>Roof Material: </h2><p>{{ Session::get('roofMaterial')}}</p>
    <h2>Floor Material: </h2><p>{{ Session::get('floorsMaterial')}}</p>
    <h2>Specification of standards & materials:: </h2><p>ALL CONSTRUCTION TO CONFORM TO ONTARIO BUILDING CODE 2012. CONTRACTOR TO CHECK AND VERIFY ALL DIMENSIONS AND REPORT ANY DISCREPANCY PRIOR TO PROCEEDING WITH THE WORK.
LUMBER IS #2 GRADE SPRUCE, UNLESS NOTED OTHERWISE.</p>
    <br>

  </body>
</html>
