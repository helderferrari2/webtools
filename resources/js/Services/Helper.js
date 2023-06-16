import { ref } from 'vue';


export const copyToClipboard = (value = '') => {
    try {
        navigator.clipboard.writeText(value)
        return true
    } catch (e) {
      console.error('Failed to copy', e)
      return false
    }
};

//Exemeplo para substituir mixins
// import { ref } from 'vue';

// export const useMessage = () => {
//   const message = ref("This message is in our composable!");

//   const printMessage = () => {
//     console.log(message.value);
//   };

//   return { message, printMessage };
// };