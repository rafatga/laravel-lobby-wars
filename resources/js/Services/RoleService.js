import ApiService from './api.service'

export default {
  query(params) {
    return ApiService.query('roles', {
      params: params
    })
  }
}
