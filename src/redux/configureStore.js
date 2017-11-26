// Import reducers
import SelectedProjectReducer from './reducers/selected-project-reducer';

export default function configureStore(initialState) {
	return {
		selectedProject: SelectedProjectReducer
	};
}