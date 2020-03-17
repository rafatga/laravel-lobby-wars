import ApiService from './api.service'

export default {
  query(params) {
    return ApiService.query('trials', {
      params: params
    })
  },
  get(id) {
    return ApiService.get('trials', id)
  },
  create(teams) {
    return ApiService.post('trials', {
        teams: teams,
    })
  },
}
