import { Button, StyleSheet, Text, TextInput, View } from 'react-native';
import { useState } from 'react';

export default function App() {
  const[enteredGoalText,setEnteredText]=useState('');
  const[cousreGoals, setCourseGoals]=useState([]);

  function goalInputHandler(enteredText){
    setEnteredText(enteredText);
  }

  function addGoalHadnler(){
    setCourseGoals((currentCourseGoals)=>
      [...cousreGoals,enteredGoalText]);
  };
  return (
    <View style={styles.appContainer}>
      <View style={styles.inputContainer}>
        <TextInput
          style={styles.textInput}
          placeholder='your course goal'
          onChangeText={goalInputHandler}
       />
        <Button title='Add Goal'
          onPress={addGoalHadnler}
        />
      </View>
      <View style={styles.goalsContainer}>
        {cousreGoals.map((goal) =>
        (
          <View key={goal}style={styles.goalItem}>
            <Text style={styles.goalText}>{goal}</Text>
          </View>
          ))}
        
       
      </View>
    </View>

  );
}

const styles = StyleSheet.create({
  appContainer:{
    flex:1,
    paddingTop:50,
    paddingHorizontal:16,
  },
  inputContainer:{
    flex:1,
    flexDirection:'row',
    justifyContent:'space-between',
    alignItems:'center',
    borderWidth:1,
    borderBottomColor:'#d9d9d9',
    marginBottom:24,
  },
  textInput:{
    borderWidth:1,
    borderColor:'#d9d9d9',
    width:'70%',
    marginRight:10,
    padding:8,
  },
  goalsContainer:{
    flex:5,
  },
  goalItem:{
    margin:8,
    padding:20,
    borderRadius:20,
    backgroundColor:"black",
  },
  goalText:{
    color:"white",
    fontSize:15,
    
  }
});
