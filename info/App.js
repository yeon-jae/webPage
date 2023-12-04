import { Button, StyleSheet, Text, TextInput, View } from 'react-native';

export default function App() {
  return (
    <View style={styles.appContainer}>
      <View style={styles.inputContainer}>
        <TextInput style={styles.textInput} placeholder='your course goal'/>
        <Button title='Add Goal'/>
      </View>
      <View>
        <Text>List of goals...</Text>
        <Text>List of todo list</Text>
      </View>
    </View>

  );
}

const styles = StyleSheet.create({
  appContainer:{
    padding:50,
  },
  inputContainer:{
    justifyContent:'space-between',
    flexDirection:'row'
  },
  textInput:{
    borderWidth:1,
    borderColor:'#d9d9d9',
    width:'80%',
    marginRight:10,
    padding:8,
  }
});
