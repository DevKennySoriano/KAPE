<script>
export default {
  data() {
    return {
      FormName: 'LoginForm',
      LoginHeader:'Welcome!',
      LoginDescription:'please enter your creds'
    }
  }
}
</script>

<style>
*{
    margin:0 auto;
    padding:auto;
    font-family:Arial, Helvetica, sans-serif;
}

.Login-Form{
    display:flex;
    height:100vh;
}
.Form-Container-Left .Form-Container-Right{
    flex:1;
}
</style>