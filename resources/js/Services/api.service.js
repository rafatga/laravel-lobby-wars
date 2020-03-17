import Vue from 'vue'

export default {

  query(resource, params) {
    return Vue.axios.get(resource, params).catch(error => {
      throw new Error(`[LOBBY] ApiService ${error}`)
    })
  },

  get(resource, id = '', params) {
    return Vue.axios.get(`${resource}/${id}`, params).catch(error => {
      throw new Error(`[LOBBY] ApiService ${error}`)
    })
  },

  post(resource, params) {
    return Vue.axios.post(`${resource}`, params)
  },

  update(resource, key, params) {
    return Vue.axios.put(`${resource}/${key}`, params)
  },

  put(resource, params) {
    return Vue.axios.put(`${resource}`, params)
  },

}