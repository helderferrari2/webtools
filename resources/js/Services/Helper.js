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

export const slugify = (str) => {
  str = str.replace(/^\s+|\s+$/g, ''); // trim leading/trailing white space
  str = str.toLowerCase(); // convert string to lowercase
  str = str.replace(/[^a-z0-9 -]/g, '') // remove any non-alphanumeric characters
           .replace(/\s+/g, '-') // replace spaces with hyphens
           .replace(/-+/g, '-'); // remove consecutive hyphens
  return str;
}

//Exemeplo para substituir mixins
// import { ref } from 'vue';

// export const useMessage = () => {
//   const message = ref("This message is in our composable!");

//   const printMessage = () => {
//     console.log(message.value);
//   };

//   return { message, printMessage };
// };